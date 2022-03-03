<?php

namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
/**
 * Commande_article
 * @ORM\Table(name="livraison_produit")
 * @ORM\Entity
 */
class Commande_produit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Livraison", cascade={"persist"}, fetch="LAZY")
     * @ORM\JoinColumn(name="commande_id", referencedColumnName="id")
     */
    private $livraison;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Produit", cascade={"persist"}, fetch="LAZY")
     * @ORM\JoinColumn(name="produit_id", referencedColumnName="id")
     */
    private $produit;


    /**
     * @ORM\Column(type="integer")
     */
    private $qte;

    /**
     * @return mixed
     */
    public function getLivraison()
    {
        return $this->livraison;
    }

    /**
     * @param mixed $livraison
     */
    public function setLivraison($livraison): void
    {
        $this->livraison = $livraison;
    }

    /**
     * @return mixed
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * @param mixed $produit
     */
    public function setProduit($produit): void
    {
        $this->produit = $produit;
    }

    /**
     * @return mixed
     */
    public function getQte()
    {
        return $this->qte;
    }

    /**
     * @param mixed $qte
     */
    public function setQte($qte): void
    {
        $this->qte = $qte;
    }









}