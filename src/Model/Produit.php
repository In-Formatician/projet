<?php

namespace App\Model;

class Produit
{
    protected int $id_prod;
    protected string $nom;
    protected string $summarize;
    protected string $descript;
    protected string $duree;
    protected float $prix;
    protected string $created_at;
    protected string $modified_at;

    /**
     * Get the value of id_prod
     *
     * @return int
     */
    public function getIdProd(): int
    {
        return $this->id_prod;
    }

    /**
     * Set the value of id_prod
     *
     * @param int $id_prod
     *
     * @return self
     */
    public function setIdProd(int $id_prod): self
    {
        $this->id_prod = $id_prod;

        return $this;
    }

    /**
     * Get the value of nom
     *
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @param string $nom
     *
     * @return self
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of summarize
     *
     * @return string
     */
    public function getSummarize(): string
    {
        return $this->summarize;
    }

    /**
     * Set the value of summarize
     *
     * @param string $summarize
     *
     * @return self
     */
    public function setSummarize(string $summarize): self
    {
        $this->summarize = $summarize;

        return $this;
    }

    /**
     * Get the value of descript
     *
     * @return string
     */
    public function getDescript(): string
    {
        return $this->descript;
    }

    /**
     * Set the value of descript
     *
     * @param string $descript
     *
     * @return self
     */
    public function setDescript(string $descript): self
    {
        $this->descript = $descript;

        return $this;
    }

    /**
     * Get the value of duree
     *
     * @return string
     */
    public function getDuree(): string
    {
        return $this->duree;
    }

    /**
     * Set the value of duree
     *
     * @param string $duree
     *
     * @return self
     */
    public function setDuree(string $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get the value of prix
     *
     * @return float
     */
    public function getPrix(): float
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @param float $prix
     *
     * @return self
     */
    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of created_at
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @param string $created_at
     *
     * @return self
     */
    public function setCreatedAt(string $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get the value of modified_at
     *
     * @return string
     */
    public function getModifiedAt(): string
    {
        return $this->modified_at;
    }

    /**
     * Set the value of modified_at
     *
     * @param string $modified_at
     *
     * @return self
     */
    public function setModifiedAt(string $modified_at): self
    {
        $this->modified_at = $modified_at;

        return $this;
    }
}