<?php

namespace ContainerPjuOWmk;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'getConnection', array(), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return $this->valueHolder71a5f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'getMetadataFactory', array(), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return $this->valueHolder71a5f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'getExpressionBuilder', array(), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return $this->valueHolder71a5f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'beginTransaction', array(), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return $this->valueHolder71a5f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'getCache', array(), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return $this->valueHolder71a5f->getCache();
    }

    public function transactional($func)
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'transactional', array('func' => $func), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return $this->valueHolder71a5f->transactional($func);
    }

    public function commit()
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'commit', array(), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return $this->valueHolder71a5f->commit();
    }

    public function rollback()
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'rollback', array(), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return $this->valueHolder71a5f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'getClassMetadata', array('className' => $className), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return $this->valueHolder71a5f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'createQuery', array('dql' => $dql), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return $this->valueHolder71a5f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'createNamedQuery', array('name' => $name), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return $this->valueHolder71a5f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return $this->valueHolder71a5f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return $this->valueHolder71a5f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'createQueryBuilder', array(), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return $this->valueHolder71a5f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'flush', array('entity' => $entity), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return $this->valueHolder71a5f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return $this->valueHolder71a5f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return $this->valueHolder71a5f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return $this->valueHolder71a5f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'clear', array('entityName' => $entityName), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return $this->valueHolder71a5f->clear($entityName);
    }

    public function close()
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'close', array(), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return $this->valueHolder71a5f->close();
    }

    public function persist($entity)
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'persist', array('entity' => $entity), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return $this->valueHolder71a5f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'remove', array('entity' => $entity), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return $this->valueHolder71a5f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'refresh', array('entity' => $entity), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return $this->valueHolder71a5f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'detach', array('entity' => $entity), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return $this->valueHolder71a5f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'merge', array('entity' => $entity), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return $this->valueHolder71a5f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return $this->valueHolder71a5f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return $this->valueHolder71a5f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'getRepository', array('entityName' => $entityName), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return $this->valueHolder71a5f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'contains', array('entity' => $entity), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return $this->valueHolder71a5f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'getEventManager', array(), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return $this->valueHolder71a5f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'getConfiguration', array(), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return $this->valueHolder71a5f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'isOpen', array(), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return $this->valueHolder71a5f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'getUnitOfWork', array(), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return $this->valueHolder71a5f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return $this->valueHolder71a5f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return $this->valueHolder71a5f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'getProxyFactory', array(), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return $this->valueHolder71a5f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'initializeObject', array('obj' => $obj), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return $this->valueHolder71a5f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'getFilters', array(), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return $this->valueHolder71a5f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'isFiltersStateClean', array(), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return $this->valueHolder71a5f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, 'hasFilters', array(), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        return $this->valueHolder71a5f->hasFilters();
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

        $instance->initializercf888 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder71a5f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder71a5f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder71a5f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, '__get', ['name' => $name], $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        if (isset(self::$publicProperties30a0d[$name])) {
            return $this->valueHolder71a5f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
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

        $targetObject = $this->valueHolder71a5f;
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
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder71a5f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder71a5f;
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
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, '__isset', array('name' => $name), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder71a5f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder71a5f;
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
        $this->initializercf888 && ($this->initializercf888->__invoke($valueHolder71a5f, $this, '__unset', array('name' => $name), $this->initializercf888) || 1) && $this->valueHolder71a5f = $valueHolder71a5f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder71a5f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder71a5f;
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
