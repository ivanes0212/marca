<?php

namespace uni\bundle\marcaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * comentarios
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class comentarios
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
     * @var string
     *
     * @ORM\Column(name="nombreCom", type="string", length=50)
     */
    private $nombreCom;

    /**
     * @var string
     *
     * @ORM\Column(name="descCom", type="text")
     */
    private $descCom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaCom", type="datetime")
     */
    private $fechaCom;

    /**
     * @var string
     *
     * @ORM\Column(name="nickCom", type="string", length=50)
     */
    private $nickCom;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombreCom
     *
     * @param string $nombreCom
     * @return comentarios
     */
    public function setNombreCom($nombreCom)
    {
        $this->nombreCom = $nombreCom;

        return $this;
    }

    /**
     * Get nombreCom
     *
     * @return string 
     */
    public function getNombreCom()
    {
        return $this->nombreCom;
    }

    /**
     * Set descCom
     *
     * @param string $descCom
     * @return comentarios
     */
    public function setDescCom($descCom)
    {
        $this->descCom = $descCom;

        return $this;
    }

    /**
     * Get descCom
     *
     * @return string 
     */
    public function getDescCom()
    {
        return $this->descCom;
    }

    /**
     * Set fechaCom
     *
     * @param \DateTime $fechaCom
     * @return comentarios
     */
    public function setFechaCom($fechaCom)
    {
        $this->fechaCom = $fechaCom;

        return $this;
    }

    /**
     * Get fechaCom
     *
     * @return \DateTime 
     */
    public function getFechaCom()
    {
        return $this->fechaCom;
    }

    /**
     * Set nickCom
     *
     * @param string $nickCom
     * @return comentarios
     */
    public function setNickCom($nickCom)
    {
        $this->nickCom = $nickCom;

        return $this;
    }

    /**
     * Get nickCom
     *
     * @return string 
     */
    public function getNickCom()
    {
        return $this->nickCom;
    }
    
        /**
* @ORM\ManyToOne(targetEntity="noticias", inversedBy="notcoms", cascade={"remove"})
*/
protected $comnot;

    /**
     * Set comnot
     *
     * @param \uni\bundle\marcaBundle\Entity\noticias $comnot
     * @return comentarios
     */
    public function setComnot(\uni\bundle\marcaBundle\Entity\noticias $comnot = null)
    {
        $this->comnot = $comnot;

        return $this;
    }

    /**
     * Get comnot
     *
     * @return \uni\bundle\marcaBundle\Entity\noticias 
     */
    public function getComnot()
    {
        return $this->comnot;
    }
 public function __toString() {
     return $this->nombreCom;}
}
