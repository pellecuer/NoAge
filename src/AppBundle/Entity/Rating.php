<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Category
 *
 * @ORM\Table(name="rating")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RatingRepository")
 */
class Rating
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @Assert\Range(
     *     min = 1,
     *     max = 5,
     *     minMessage = "Vous ne pouvez entrer une note inférieure à {{ limit }}",
     *     maxMessage = "Vous ne pouvez entrer une note supérieure à {{ limit }}"
     * )
     *
     * @ORM\Column(name="rating", type="integer", length=45, nullable=true)
     */
    private $rating;

    /**
     * @var
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")     *
     */
    private $user;

    /**
     * @var
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Formation")
     */
    private $formation;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param int $rate
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getFormation()
    {
        return $this->formation;
    }

    /**
     * @param mixed $formation
     */
    public function setFormation($formation)
    {
        $this->formation = $formation;
    }


}

