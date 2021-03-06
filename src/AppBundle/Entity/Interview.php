<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Interview
 *
 * @ORM\Table(name="interview")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\InterviewRepository")
 */
class Interview
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
     * @var string
     *
     * @ORM\Column(name="question_1", type="string", length=255)
     */
    private $question1;

    /**
     * @var string
     *
     * @ORM\Column(name="answer_1", type="string", length=255)
     */
    private $answer1;

    /**
     * @var string
     *
     * @ORM\Column(name="question_2", type="string", length=255)
     */
    private $question2;

    /**
     * @var string
     *
     * @ORM\Column(name="answer_2", type="string", length=255)
     */
    private $answer2;

    /**
     * @var string
     *
     * @ORM\Column(name="question_3", type="string", length=255)
     */
    private $question3;

    /**
     * @var string
     *
     * @ORM\Column(name="answer_3", type="string", length=255)
     */
    private $answer3;



    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set question1
     *
     * @param string $question1
     *
     * @return Interview
     */
    public function setQuestion1($question1)
    {
        $this->question1 = $question1;

        return $this;
    }

    /**
     * Get question1
     *
     * @return string
     */
    public function getQuestion1()
    {
        return $this->question1;
    }

    /**
     * Set answer1
     *
     * @param string $answer1
     *
     * @return Interview
     */
    public function setAnswer1($answer1)
    {
        $this->answer1 = $answer1;

        return $this;
    }

    /**
     * Get answer1
     *
     * @return string
     */
    public function getAnswer1()
    {
        return $this->answer1;
    }

    /**
     * Set question2
     *
     * @param string $question2
     *
     * @return Interview
     */
    public function setQuestion2($question2)
    {
        $this->question2 = $question2;

        return $this;
    }

    /**
     * Get question2
     *
     * @return string
     */
    public function getQuestion2()
    {
        return $this->question2;
    }

    /**
     * Set answer2
     *
     * @param string $answer2
     *
     * @return Interview
     */
    public function setAnswer2($answer2)
    {
        $this->answer2 = $answer2;

        return $this;
    }

    /**
     * Get answer2
     *
     * @return string
     */
    public function getAnswer2()
    {
        return $this->answer2;
    }

    /**
     * Set question3
     *
     * @param string $question3
     *
     * @return Interview
     */
    public function setQuestion3($question3)
    {
        $this->question3 = $question3;

        return $this;
    }

    /**
     * Get question3
     *
     * @return string
     */
    public function getQuestion3()
    {
        return $this->question3;
    }

    /**
     * Set answer3
     *
     * @param string $answer3
     *
     * @return Interview
     */
    public function setAnswer3($answer3)
    {
        $this->answer3 = $answer3;

        return $this;
    }

    /**
     * Get answer3
     *
     * @return string
     */
    public function getAnswer3()
    {
        return $this->answer3;
    }

    /**
     * Set question4
     *
     * @param string $question4
     *
     * @return Interview
     */
    public function setQuestion4($question4)
    {
        $this->question4 = $question4;

        return $this;
    }

    /**
     * Get question4
     *
     * @return string
     */
    public function getQuestion4()
    {
        return $this->question4;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Interview
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
