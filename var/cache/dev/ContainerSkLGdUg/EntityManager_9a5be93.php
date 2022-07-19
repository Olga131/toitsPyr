<?php

namespace ContainerSkLGdUg;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder35428 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer45970 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties56401 = [
        
    ];

    public function getConnection()
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'getConnection', array(), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'getMetadataFactory', array(), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'getExpressionBuilder', array(), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'beginTransaction', array(), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'getCache', array(), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->getCache();
    }

    public function transactional($func)
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'transactional', array('func' => $func), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'wrapInTransaction', array('func' => $func), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'commit', array(), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->commit();
    }

    public function rollback()
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'rollback', array(), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'getClassMetadata', array('className' => $className), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'createQuery', array('dql' => $dql), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'createNamedQuery', array('name' => $name), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'createQueryBuilder', array(), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'flush', array('entity' => $entity), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'clear', array('entityName' => $entityName), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->clear($entityName);
    }

    public function close()
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'close', array(), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->close();
    }

    public function persist($entity)
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'persist', array('entity' => $entity), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'remove', array('entity' => $entity), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'refresh', array('entity' => $entity), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'detach', array('entity' => $entity), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'merge', array('entity' => $entity), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'getRepository', array('entityName' => $entityName), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'contains', array('entity' => $entity), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'getEventManager', array(), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'getConfiguration', array(), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'isOpen', array(), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'getUnitOfWork', array(), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'getProxyFactory', array(), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'initializeObject', array('obj' => $obj), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'getFilters', array(), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'isFiltersStateClean', array(), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'hasFilters', array(), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return $this->valueHolder35428->hasFilters();
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

        $instance->initializer45970 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder35428) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder35428 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder35428->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, '__get', ['name' => $name], $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        if (isset(self::$publicProperties56401[$name])) {
            return $this->valueHolder35428->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder35428;

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

        $targetObject = $this->valueHolder35428;
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
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder35428;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder35428;
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
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, '__isset', array('name' => $name), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder35428;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder35428;
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
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, '__unset', array('name' => $name), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder35428;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder35428;
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
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, '__clone', array(), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        $this->valueHolder35428 = clone $this->valueHolder35428;
    }

    public function __sleep()
    {
        $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, '__sleep', array(), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;

        return array('valueHolder35428');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer45970 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer45970;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer45970 && ($this->initializer45970->__invoke($valueHolder35428, $this, 'initializeProxy', array(), $this->initializer45970) || 1) && $this->valueHolder35428 = $valueHolder35428;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder35428;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder35428;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
