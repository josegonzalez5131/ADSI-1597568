<?php
namespace Calculator;
/**
 * Description of calculator
 *
 * @author Daniela Betancourt <daniagudelo0322@gmail.com>
 */
class calculatorclass
{
  /**
   * Number one for the operation
   *
   * @var float
   */
    
  private $number1;
  
  /**
   * Number two for the operation
   *
   * @var float 
   */
  
  private $number2;
  
  /**
   * Return the number 1
   * 
   * @return float
   */
  
  public function getNumber1(): float
  {
      return $this->number1;
  }
  /**
   * Return the number 2
   * 
   * @return float
   */
  public function getNumber2(): float 
  {
      return $this->number2;
  }
  
  /**
   * Set the number 1
   * 
   * @param float $number1
   */
  
  public function setNumber1(float $number1) {
      $this->number1 = $number1;
  }
  
  /**
   * Set the number 2
   * 
   * @param float $number2
   */
  
  public function setNumber2(float $number2) {
      $this->number2 = $number2;
  }
  
  /**
   * Summation operation
   * 
   * @return float
   */
   
  public function Sum(): float 
  {
    return $this->number1 + $this->number2;
  }
  
  /**
   * Subtraction operation
   * 
   * @return float
   */
  
  public function Rest(): float 
  {
    return $this->number1 - $this->number2;
  }
  
  /**
   * Multiplication operation
   * 
   * @return float
   */
  
  public function Mult(): float 
  {
    return $this->number1 * $this->number2;
  }
  
  /**
   * Splitting operation
   * 
   * @return float
   */
  
  public function Div(): float 
  {
    if ($this->number2 !=0) {
    return $this->number1 / $this->number2;}
    else {
       throw new \Exception('Error: The division  between zero is mathematically impossible', 404);
    }
  }
  
  /**
   * Operation division module
   * 
   * @return float
   */
  
  public function mod(): float
  {
    return $this->number1 % $this->number2;
  }
  
  /**
   * Logarithm operation
   * 
   * @return float
   */
  
  public function log(): float 
  {
    return log($this->number1, $this->number2); 
  }
  
  /**
   * X² operation
   * 
   * @return float
   */
  
  public function pow(): float 
  {
    return pow($this->number1, $this->number2);  
  }
  
  /**
   * Square operation
   * 
   * @return float
   */
  
  public function square(): float
  {
    return sqrt($this->number1);
  }
  
  /**
   * Root of x between y operation
   * 
   * @return float
   */
  
  public function squarex(): float 
  {
    return pow($this->number2, sqrt($this->number1));  
  }
}
