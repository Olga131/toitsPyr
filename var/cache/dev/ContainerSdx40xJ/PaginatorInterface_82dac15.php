<?php

namespace ContainerSdx40xJ;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7ae6d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf2d7a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3d7d7 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        if ($this->valueHolder7ae6d === $returnValue = $this->valueHolder7ae6d->paginate($target, $page, $limit, $options)) {
            return $this;
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

        $instance->initializerf2d7a = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder7ae6d) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder7ae6d = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, '__get', ['name' => $name], $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        if (isset(self::$publicProperties3d7d7[$name])) {
            return $this->valueHolder7ae6d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7ae6d;

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

        $targetObject = $this->valueHolder7ae6d;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7ae6d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7ae6d;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, '__isset', array('name' => $name), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7ae6d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7ae6d;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, '__unset', array('name' => $name), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7ae6d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7ae6d;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, '__clone', array(), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        $this->valueHolder7ae6d = clone $this->valueHolder7ae6d;
    }

    public function __sleep()
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, '__sleep', array(), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return array('valueHolder7ae6d');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf2d7a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf2d7a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'initializeProxy', array(), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7ae6d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7ae6d;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
