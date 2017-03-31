<?php

/**
 * Created by PhpStorm.
 * User: christophercastro
 * Date: 30/03/17
 * Time: 13:50
 */
class Usuario
{
    const TABLAU = 'Usuario';
    private $correo;
    private $nombre;
    private $apellidos;
    private $password;
    private $telefono;
    private $imagen;
    private $isCapitan;

    public function __construct($correo, $nombre, $apellidos, $password, $telefono, $imagen, $isCapitan = false)
    {
        $this->correo = $correo;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->password = $password;
        $this->telefono = $telefono;
        $this->imagen = $imagen;
        $this->isCapitan = $isCapitan;
    }

    public function guardar()
    {
        $conexion = new Conexion();
        if ($this->correo) /*Modifica*/ {
            $consulta = $conexion->prepare('UPDATE ' . self::TABLAU . ' SET Correo = :correo, Nombre = :nombre, Apellidos = :apellidos, Password = :password, Telefono = :telefono, Imagen = :imagen, EsCapitan = :isCapitan  WHERE Correo = :correo');
            $consulta->bindParam(':correo', $this->correo);
            $consulta->bindParam(':nombre', $this->nombre);
            $consulta->bindParam(':apellidos', $this->apellidos);
            $consulta->bindParam(':password', $this->password);
            $consulta->bindParam(':telefono', $this->telefono);
            $consulta->bindParam(':imagen', $this->imagen);
            $consulta->bindParam(':isCapitan', $this->isCapitan);
            $consulta->execute();
        } else /*Inserta*/ {
            $consulta = $conexion->prepare('INSERT INTO' . self::TABLAU . '(Correo,Nombre,Apellidos,Contraseña,Telefono,Imagen,EsCapitan) VALUES( :correo, :nombre, :apellidos, :password, :telefono, :imagen, :isCapitan)');
            $consulta->bindParam(':correo', $this->correo);
            $consulta->bindParam(':nombre', $this->nombre);
            $consulta->bindParam(':apellidos', $this->apellidos);
            $consulta->bindParam(':password', $this->password);
            $consulta->bindParam(':telefono', $this->telefono);
            $consulta->bindParam(':imagen', $this->imagen);
            $consulta->bindParam(':isCapitan', $this->isCapitan);
            $consulta->execute();
           // $this->id = $conexion->lastInsertId(); not this time bro :(
        }
        $conexion = null;
    }

    /**
     * @return mixed
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * @param mixed $correo
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * @param mixed $apellidos
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * @param mixed $telefono
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    /**
     * @return mixed
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * @param mixed $imagen
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }

    /**
     * @return bool
     */
    public function isIsCapitan()
    {
        return $this->isCapitan;
    }

    /**
     * @param bool $isCapitan
     */
    public function setIsCapitan($isCapitan)
    {
        $this->isCapitan = $isCapitan;
    }


}