<?php

namespace App\Entity;

use App\Repository\HelpRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HelpRepository::class)
 */
class Help
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $question;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $answer;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $counter;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $positiveRate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $negativeRate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(string $question): self
    {
        $this->question = $question;

        return $this;
    }

    public function getAnswer(): ?string
    {
        return $this->answer;
    }

    public function setAnswer(string $answer): self
    {
        $this->answer = $answer;

        return $this;
    }

    public function getCounter(): ?string
    {
        return $this->counter;
    }

    public function setCounter(string $counter): self
    {
        $this->counter = $counter;

        return $this;
    }

    public function getPositiveRate(): ?string
    {
        return $this->positiveRate;
    }

    public function setPositiveRate(string $positiveRate): self
    {
        $this->positiveRate = $positiveRate;

        return $this;
    }

    public function getNegativeRate(): ?string
    {
        return $this->negativeRate;
    }

    public function setNegativeRate(string $negativeRate): self
    {
        $this->negativeRate = $negativeRate;

        return $this;
    }
}
