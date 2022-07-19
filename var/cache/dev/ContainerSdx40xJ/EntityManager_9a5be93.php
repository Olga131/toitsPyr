<?php

namespace ContainerSdx40xJ;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'getConnection', array(), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'getMetadataFactory', array(), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'getExpressionBuilder', array(), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'beginTransaction', array(), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'getCache', array(), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'transactional', array('func' => $func), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'commit', array(), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->commit();
    }

    public function rollback()
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'rollback', array(), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'getClassMetadata', array('className' => $className), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'createQuery', array('dql' => $dql), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'createNamedQuery', array('name' => $name), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'createQueryBuilder', array(), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'flush', array('entity' => $entity), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'clear', array('entityName' => $entityName), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->clear($entityName);
    }

    public function close()
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'close', array(), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->close();
    }

    public function persist($entity)
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'persist', array('entity' => $entity), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'remove', array('entity' => $entity), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'refresh', array('entity' => $entity), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'detach', array('entity' => $entity), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'merge', array('entity' => $entity), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'contains', array('entity' => $entity), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'getEventManager', array(), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'getConfiguration', array(), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'isOpen', array(), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'getUnitOfWork', array(), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'getProxyFactory', array(), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'initializeObject', array('obj' => $obj), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'getFilters', array(), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'isFiltersStateClean', array(), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, 'hasFilters', array(), $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        return $this->valueHolder7ae6d->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerf2d7a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7ae6d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7ae6d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7ae6d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf2d7a && ($this->initializerf2d7a->__invoke($valueHolder7ae6d, $this, '__get', ['name' => $name], $this->initializerf2d7a) || 1) && $this->valueHolder7ae6d = $valueHolder7ae6d;

        if (isset(self::$publicProperties3d7d7[$name])) {
            return $this->valueHolder7ae6d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
