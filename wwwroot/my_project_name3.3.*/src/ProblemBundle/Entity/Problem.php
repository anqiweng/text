<?php

namespace ProblemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use UserBundle\Entity\User;

/**
 * @ORM\Entity
 * @ORM\Table(name="liudanlite_problem")
 */
class Problem
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=1024, nullable=false)
     * @Assert\Length(min=3, max=1024)
     */
    public $title;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    public $description;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    public $inputFormat;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    public $outputFormat;

    /**
     * @var SampleTestcase[]
     *
     * @ORM\Column(type="array")
     */
    public $sampleTestcases;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    public $hint;

    /**
     * @var TestcaseInfo[]
     *
     * @ORM\Column(type="array")
     */
    public $testcaseInfo;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=true)
     */
    public $provider;

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
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getInputFormat()
    {
        return $this->inputFormat;
    }

    /**
     * @param string $inputFormat
     */
    public function setInputFormat($inputFormat)
    {
        $this->inputFormat = $inputFormat;
    }

    /**
     * @return string
     */
    public function getOutputFormat()
    {
        return $this->outputFormat;
    }

    /**
     * @param string $outputFormat
     */
    public function setOutputFormat($outputFormat)
    {
        $this->outputFormat = $outputFormat;
    }

    /**
     * @return SampleTestcase[]
     */
    public function getSampleTestcases()
    {
        return $this->sampleTestcases;
    }

    /**
     * @param SampleTestcase[] $sampleTestcases
     */
    public function setSampleTestcases($sampleTestcases)
    {
        $this->sampleTestcases = $sampleTestcases;
    }

    /**
     * @return string
     */
    public function getHint()
    {
        return $this->hint;
    }

    /**
     * @param string $hint
     */
    public function setHint($hint)
    {
        $this->hint = $hint;
    }

    /**
     * @return TestcaseInfo[]
     */
    public function getTestcaseInfo()
    {
        return $this->testcaseInfo;
    }

    /**
     * @param TestcaseInfo[] $testcaseInfo
     */
    public function setTestcaseInfo($testcaseInfo)
    {
        $this->testcaseInfo = $testcaseInfo;
    }

    /**
     * @return User
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @param User $provider
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;
    }

}
