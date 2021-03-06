<?php
namespace DrupalReleaseDate\Sampling;

use DrupalReleaseDate\NumberGenerator\NumberGeneratorInterface;

class SampleSetRandomSampleSelector implements RandomSampleSelectorInterface
{
    protected $sampleSet;
    protected $randomGenerator;

    public function __construct(SampleSet $sampleSet, NumberGeneratorInterface $randomGenerator)
    {
        $this->sampleSet = $sampleSet;
        $this->randomGenerator = $randomGenerator;
    }

    public function getLastSample()
    {
        return $this->sampleSet->getLast();
    }

    public function getRandomSample()
    {
        return $this->sampleSet->get($this->randomGenerator->generate());
    }

}
