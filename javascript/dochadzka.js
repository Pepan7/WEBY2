var mapadni = new Map();
mapadni.set('Mon', 'Pon');
mapadni.set('Tue', 'Ut');
mapadni.set('Wed', 'St');
mapadni.set('Thu', 'Št');
mapadni.set('Fri', 'Pia');
mapadni.set('Sat', 'So');
mapadni.set('Sun', 'Ne');
var editovat = false;
var nazovclasy;
var nastavit = [];
$(document).ready(function(){
    $("#potvrd").click(function() {
        var mesiac = $("#mesiace").val();
        var rok = $("#roky").val();
        var datum = new Date(mesiac + " 1, " + rok);
        var prvyden = datum.toDateString().slice(0,3);
        prvyden = mapadni.get(prvyden);
        $("#skryt").val(prvyden);
    });

    var bezobmedzenia = false;
    var roly = $("#roly").html();
    var vsetkyroly = roly.split(' ');
    for (let q = 0;q < vsetkyroly.length;q++)
    {
        if (vsetkyroly[q] == 'hr' || vsetkyroly[q] == 'admin')
            bezobmedzenia = true;
    }

    $("td").on("mousedown", function() {
        if (editovat == true)
        {
            var riadok = $(this).parent().index();
            var aktualmeno = $(this).parent().children().get(0).textContent;
            var aktualpriezvisko = $(this).parent().children().get(1).textContent;
            var cele = $("#prihl").html();
            var celepole = cele.split(' ');
            var dvaspr = 0;
            for (let m = 0; m < celepole.length; m++)
            {
                celepole[m] = celepole[m].replace(","," ");
                celepole[m] = celepole[m].replace("."," ");
                celepole[m] = celepole[m].trim();
                if (celepole[m] == aktualmeno)
                {
                    dvaspr++;
                }
                if (celepole[m] == aktualpriezvisko)
                {
                    dvaspr++;
                }
            }
            if (!((nazovclasy == '' ) && ($(this).attr('class') == 'vikend')))
            {
                if (dvaspr == 2 || bezobmedzenia == true) {
                    $("td").bind("mouseover", function () {
                        if (riadok == $(this).parent().index()) {
                            var objekt = {};
                            $(this).attr('class', nazovclasy);
                            $(this).html(nazovclasy);
                            objekt ["riadok"] = $(this).parent().index();
                            objekt ["stlpec"] = $(this).index();
                            objekt ["class"] = nazovclasy;
                            objekt ["rok"] = $("#roky").val();
                            objekt ["mesiac"] = $("#mesiace").val();
                            nastavit.push(objekt);
                        }
                    });
                    var objekt = {};
                    objekt ["riadok"] = $(this).parent().index();
                    objekt ["stlpec"] = $(this).index();
                    objekt ["class"] = nazovclasy;
                    objekt ["rok"] = $("#roky").val();
                    objekt ["mesiac"] = $("#mesiace").val();
                    $(this).attr('class', nazovclasy);
                    $(this).html(nazovclasy);
                    nastavit.push(objekt);
                }
            }
        }
    });

    $("td").on("mouseup", function() {
        $("td").unbind("mouseover");
    });

    $("button").click(function () {
        nazovclasy = $(this).attr('class');
    });

    $("#editmod").click(function() {
        editovat = true;
        $("span.editovanie").css("display","inline");
        $("#editmod").css("display","none");
        $("#prehladmod").css("display","inline");
    });

    if (bezobmedzenia == true)
        $("#doktorant").show();
    else $("#doktorant").hide();

    $("#uloz").click(function() {
        var nastavit2 = JSON.stringify(nastavit);

        $.ajax({
            type: "POST",
            url: "funkciadochadzky.php",
            data: {'Datan' : nastavit2}
        });
        nastavit = [];
    });
    
    $("#prehladmod").click(function() {
        editovat = false;
        $("span.editovanie").css("display","none");
        $("#editmod").css("display","inline");
        $("#prehladmod").css("display","none");
    });
    $("#pdf").click(function () {

    var hlavickaTAB = $("thead th").map(function() {
        return this.innerHTML;
    }).get();

    var hlavickaTABprve = [ {rowSpan: 2, text: hlavickaTAB[0] }, {rowSpan: 2, text: hlavickaTAB[1]}];
    var hlavickaTABdruhe = [];
    hlavickaTABdruhe[0] = '';
    hlavickaTABdruhe[1] = '';
    var d = 2;
    for (let c=2; c < hlavickaTAB.length;c++)
    {
        if($.isNumeric(hlavickaTAB[c]))
            hlavickaTABprve[c] = hlavickaTAB[c];
        else
        {
            hlavickaTABdruhe[d] = hlavickaTAB[c];
            d++;
        }
    }

    var docDefinition = {
        pageSize: 'A3',
        pageOrientation: 'landscape',
        pageMargins: [ 40, 50, 0, 0 ],
        content: [
            {
                table: {
                    body: [
                    ]
                }
            }
        ]
    };
    docDefinition["content"][0]["table"]["body"].push(hlavickaTABprve);
    docDefinition["content"][0]["table"]["body"].push(hlavickaTABdruhe);

    var teloTAB = $("tbody tr th,td").map(function() {
        return this.innerHTML;
    }).get();

    var q = 0;
    for (let o = 0; o < ($('tr').length)-2; o++) {
        var teloTABkusok = [];
        for (q; q < hlavickaTABprve.length; q++) {
            teloTABkusok.push(teloTAB[0]);
            teloTAB.splice(0,1);
        }
        q = 0;
        docDefinition["content"][0]["table"]["body"].push(teloTABkusok);
    }

    pdfMake.createPdf(docDefinition).download('dochadzka.pdf');
    });
});