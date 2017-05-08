<?php

// src/AppBundle/Entity/Product.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="producttype")
 */
class ProductType
{

  /**
      * @ORM\Column(type="integer")
      * @ORM\Id
      * @ORM\GeneratedValue(strategy="AUTO")
      */
     private $tid;

     /**
      * @ORM\Column(type="string", length=100)
      */
     private $beschrijving;

     private $producten;


     public function setTid($tid) {
       $this->$tid = $tid;
     }
     public function getTid() {

       return $this->$tid;
     }
     public function setBeschrijving() {
       $this->$beschrijving = $beschrijving;
     }
     public function getBeschrijving() {

       return $this->$beschrijving;
     }
}
?>
