<?php

namespace ContainerPfDhetf;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder71a5f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercf888 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties30a0d = [
        
    ];

    public function paginate($target, int $page = 1, int $limit = 10, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        if ($this->valueHolder71a5f === $returnValue = $this->valueHolder71a5f->paginate($target, $page, $limit, $options)) {
            $returnValue = $this;
        }

        return $returnValue;
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        $instance->initializercf888 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder71a5f) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder71a5f = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, '__get', ['name' => $name], $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        if (isset(self::$publicProperties30a0d[$name])) {
            return $this->valueHolder71a5f->$name;
        }

        $targetObject = $this->valueHolder71a5f;

        $backtrace = debug_backtrace(false, 1);
        trigger_error(
            sprintf(
                'Undefined property: %s::$%s in %s on line %s',
                $realInstanceReflection->getName(),
                $name,
                $backtrace[0]['file'],
                $backtrace[0]['line']
            ),
            \E_USER_NOTICE
        );
        return $targetObject->$name;
    }

    public function __set($name, $value)
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        $targetObject = $this->valueHolder71a5f;

        $targetObject->$name = $value;

        return $targetObject->$name;
    }

    public function __isset($name)
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, '__isset', array('name' => $name), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        $targetObject = $this->valueHolder71a5f;

        return isset($targetObject->$name);
    }

    public function __unset($name)
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, '__unset', array('name' => $name), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        $targetObject = $this->valueHolder71a5f;

        unset($targetObject->$name);

return;
    }

    public function __clone()
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, '__clone', array(), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        $this->valueHolder71a5f = clone $this->valueHolder71a5f;
    }

    public function __sleep()
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, '__sleep', array(), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return array('valueHolder71a5f');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercf888 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercf888;
    }

    public function initializeProxy() : bool
    {
        return $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'initializeProxy', array(), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder71a5f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder71a5f;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
