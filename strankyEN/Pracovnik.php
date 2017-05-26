<?php


class Pracovnik
{
    protected  $id,$meno,$priezvisko,$titulPred,$titulZa,$ldapLogin,$fotka,$miestnost,$telefon,$oddelenie,$pozicia,$funkcia;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getMeno()
    {
        return $this->meno;
    }

    /**
     * @param mixed $meno
     */
    public function setMeno($meno)
    {
        $this->meno = $meno;
    }

    /**
     * @return mixed
     */
    public function getPriezvisko()
    {
        return $this->priezvisko;
    }

    /**
     * @param mixed $priezvisko
     */
    public function setPriezvisko($priezvisko)
    {
        $this->priezvisko = $priezvisko;
    }

    /**
     * @return mixed
     */
    public function getTitulPred()
    {
        return $this->titulPred;
    }

    /**
     * @param mixed $titulPred
     */
    public function setTitulPred($titulPred)
    {
        $this->titulPred = $titulPred;
    }

    /**
     * @return mixed
     */
    public function getTitulZa()
    {
        return $this->titulZa;
    }

    /**
     * @param mixed $titulZa
     */
    public function setTitulZa($titulZa)
    {
        $this->titulZa = $titulZa;
    }

    /**
     * @return mixed
     */
    public function getLdapLogin()
    {
        return $this->ldapLogin;
    }

    /**
     * @param mixed $ldapLogin
     */
    public function setLdapLogin($ldapLogin)
    {
        $this->ldapLogin = $ldapLogin;
    }

    /**
     * @return mixed
     */
    public function getFotka()
    {
        return $this->fotka;
    }

    /**
     * @param mixed $fotka
     */
    public function setFotka($fotka)
    {
        $this->fotka = $fotka;
    }

    /**
     * @return mixed
     */
    public function getMiestnost()
    {
        return $this->miestnost;
    }

    /**
     * @param mixed $miestnost
     */
    public function setMiestnost($miestnost)
    {
        $this->miestnost = $miestnost;
    }

    /**
     * @return mixed
     */
    public function getTelefon()
    {
        return $this->telefon;
    }

    /**
     * @param mixed $telefon
     */
    public function setTelefon($telefon)
    {
        $this->telefon = $telefon;
    }

    /**
     * @return mixed
     */
    public function getOddelenie()
    {
        return $this->oddelenie;
    }

    /**
     * @param mixed $oddelenie
     */
    public function setOddelenie($oddelenie)
    {
        $this->oddelenie = $oddelenie;
    }

    /**
     * @return mixed
     */
    public function getPozicia()
    {
        return $this->pozicia;
    }

    /**
     * @param mixed $pozicia
     */
    public function setPozicia($pozicia)
    {
        $this->pozicia = $pozicia;
    }

    /**
     * @return mixed
     */
    public function getFunkcia()
    {
        return $this->funkcia;
    }

    /**
     * @param mixed $funkcia
     */
    public function setFunkcia($funkcia)
    {
        $this->funkcia = $funkcia;
    }




}