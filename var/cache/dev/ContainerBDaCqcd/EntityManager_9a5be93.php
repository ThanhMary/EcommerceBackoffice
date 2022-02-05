<?php

namespace ContainerBDaCqcd;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf0346 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1416b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9826d = [
        
    ];

    public function getConnection()
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'getConnection', array(), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'getMetadataFactory', array(), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'getExpressionBuilder', array(), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'beginTransaction', array(), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'getCache', array(), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'transactional', array('func' => $func), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'wrapInTransaction', array('func' => $func), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'commit', array(), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->commit();
    }

    public function rollback()
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'rollback', array(), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'getClassMetadata', array('className' => $className), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'createQuery', array('dql' => $dql), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'createNamedQuery', array('name' => $name), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'createQueryBuilder', array(), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'flush', array('entity' => $entity), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'clear', array('entityName' => $entityName), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->clear($entityName);
    }

    public function close()
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'close', array(), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->close();
    }

    public function persist($entity)
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'persist', array('entity' => $entity), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'remove', array('entity' => $entity), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'refresh', array('entity' => $entity), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'detach', array('entity' => $entity), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'merge', array('entity' => $entity), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'contains', array('entity' => $entity), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'getEventManager', array(), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'getConfiguration', array(), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'isOpen', array(), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'getUnitOfWork', array(), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'getProxyFactory', array(), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'initializeObject', array('obj' => $obj), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'getFilters', array(), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'isFiltersStateClean', array(), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'hasFilters', array(), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return $this->valueHolderf0346->hasFilters();
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

        $instance->initializer1416b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf0346) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf0346 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf0346->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, '__get', ['name' => $name], $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        if (isset(self::$publicProperties9826d[$name])) {
            return $this->valueHolderf0346->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0346;

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

        $targetObject = $this->valueHolderf0346;
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
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0346;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf0346;
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
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, '__isset', array('name' => $name), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0346;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf0346;
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
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, '__unset', array('name' => $name), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0346;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf0346;
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
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, '__clone', array(), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        $this->valueHolderf0346 = clone $this->valueHolderf0346;
    }

    public function __sleep()
    {
        $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, '__sleep', array(), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;

        return array('valueHolderf0346');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1416b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1416b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1416b && ($this->initializer1416b->__invoke($valueHolderf0346, $this, 'initializeProxy', array(), $this->initializer1416b) || 1) && $this->valueHolderf0346 = $valueHolderf0346;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf0346;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf0346;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
