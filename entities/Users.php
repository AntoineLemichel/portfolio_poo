<?php
/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 20/03/19
 * Time: 21:30.
 */
declare(strict_types=1);
class Users
{
    protected $id;
    protected $name;
    protected $password;
    protected $rang;
    protected $auth_verification;
    protected $email;

    /**
     * @return $this
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return $this
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return $this
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return $this
     */
    public function getRang()
    {
        return $this->rang;
    }

    /**
     * @return $this
     */
    public function getAuth_verification()
    {
        return $this->auth_verification;
    }

    /**
     * @return $this
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param int $id
     *
     * @return $this
     */
    public function setId(int $id)
    {
        if (is_int($id) and $id > 0) {
            $this->id = $id;

            return $this;
        }
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName(string $name)
    {
        if (is_string($name) and strlen($name) > 0) {
            $this->name = $name;

            return $this;
        }
    }

    /**
     * @param string $password
     *
     * @return $this
     */
    public function setPassword(string $password)
    {
        if (is_string($password) and strlen($password) > 0) {
            $this->password = $password;

            return $this;
        }
    }

    /**
     * @param int $rang
     *
     * @return $this
     */
    public function setRang(int $rang)
    {
        if (is_int($rang) and ($rang >= 0 or $rang <= 1)) {
            $this->rang = $rang;

            return $this;
        }
    }

    /**
     * @param int $auth_verification
     *
     * @return $this
     */
    public function setAuth_verification(int $auth_verification)
    {
        if (is_int($auth_verification)) {
            $this->auth_verification = $auth_verification;

            return $this;
        }
    }

    /**
     * @param string $email
     *
     * @return $this
     */
    public function setEmail(string $email)
    {
        if (is_string($email) and strlen($email) > 0) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)){
                $this->email = $email;

                return $this;
            }

        }
    }
}
