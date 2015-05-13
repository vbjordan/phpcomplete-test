<?php

class ClassA
{
  /* @var ClassB */
  private $classb;

  public function a()
  {
    /* completion works */
    $b = new ClassB();
    $b->bMethod();

    /* completion works */
    /* @var ClassB $c */
    $c->bMethod2();

    /* completion does not work */
    $this->classb->

  }
}
