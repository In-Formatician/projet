<?php

namespace App\Model;

class User
{
    protected int $id_user;
    protected ?string $pseudo;
    protected ?string $pwd;
    protected string $email;
    protected string $created_at;

/**
 * Hash un mot de passe, passé en paramètre, avant de l'assigner à la propriété pwd.
 *
 * @param string $pwd Mot de passe à hacher
 * @return self
 */
public function setHashPwd(string $pwd) : self
{
    $this->pwd=password_hash($pwd, PASSWORD_ARGON2I);

    return $this;
}

/**
     * Verifie la correspondance de la propriété pwd avec une chaîne de caractères fournie
     *
     * @param string $pwd Chaîne de caractère à vérifier
     * @return bool Renvoi true si la correspondance est vrai, sinon false
     */
    public function verifyPwd(string $pwd): bool
    {
        return password_verify($pwd, $this->pwd);
    }

    /**
     * Suppression du mot de passe de la propriété de l'objet 
     *
     * @return void
     */
    public function erasePwd()
    {
        $this->pwd = null;
    }


    /**
     * Get the value of id_user
     *
     * @return int
     */
    public function getIdUser(): int
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     *
     * @param int $id_user
     *
     * @return self
     */
    public function setIdUser(int $id_user): self // TODO
    {
        $this->id_user = $id_user;

        return $this;
    }

    /**
     * Get the value of pseudo
     *
     * @return string
     */
    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    /**
     * Set the value of pseudo
     *
     * @param string $pseudo
     *
     * @return ?self
     */
    public function setPseudo(?string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get the value of pwd
     *
     * @return string
     */
    public function getPwd(): string
    {
        return $this->pwd;
    }

    /**
     * Set the value of pwd
     *
     * @param string $pwd
     *
     * @return self
     */
    public function setPwd(string $pwd): self
    {
        $this->pwd = $pwd;

        return $this;
    }

    /**
     * Get the value of email
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

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

    
}

