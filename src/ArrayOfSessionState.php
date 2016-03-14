<?php

namespace Panopto\Session;

class ArrayOfSessionState implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SessionState[]|string[] $SessionState
     */
    protected $SessionState = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SessionState[]|string[]
     */
    public function getSessionState()
    {
      return $this->SessionState;
    }

    /**
     * @param SessionState[]|string[] $SessionState
     * @return \Panopto\Session\ArrayOfSessionState
     */
    public function setSessionState(array $SessionState = null)
    {
      $this->SessionState = $SessionState;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->SessionState[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SessionState|string
     */
    public function offsetGet($offset)
    {
      return $this->SessionState[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SessionState|string $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SessionState[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SessionState[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SessionState|string Return the current element
     */
    public function current()
    {
      return current($this->SessionState);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SessionState);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SessionState);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->SessionState);
    }

    /**
     * Countable implementation
     *
     * @return int SessionState Return count of elements
     */
    public function count()
    {
      return count($this->SessionState);
    }

}
