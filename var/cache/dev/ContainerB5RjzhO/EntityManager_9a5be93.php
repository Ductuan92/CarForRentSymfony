<?php

namespace ContainerB5RjzhO;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9b78a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf3e82 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties82c12 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'getConnection', array(), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'getMetadataFactory', array(), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'getExpressionBuilder', array(), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'beginTransaction', array(), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'getCache', array(), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'transactional', array('func' => $func), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'commit', array(), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->commit();
    }

    public function rollback()
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'rollback', array(), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'getClassMetadata', array('className' => $className), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'createQuery', array('dql' => $dql), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'createNamedQuery', array('name' => $name), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'createQueryBuilder', array(), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'flush', array('entity' => $entity), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'clear', array('entityName' => $entityName), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->clear($entityName);
    }

    public function close()
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'close', array(), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->close();
    }

    public function persist($entity)
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'persist', array('entity' => $entity), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'remove', array('entity' => $entity), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'refresh', array('entity' => $entity), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'detach', array('entity' => $entity), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'merge', array('entity' => $entity), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'contains', array('entity' => $entity), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'getEventManager', array(), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'getConfiguration', array(), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'isOpen', array(), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'getUnitOfWork', array(), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'getProxyFactory', array(), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'initializeObject', array('obj' => $obj), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'getFilters', array(), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'isFiltersStateClean', array(), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'hasFilters', array(), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return $this->valueHolder9b78a->hasFilters();
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

        $instance->initializerf3e82 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9b78a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9b78a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9b78a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, '__get', ['name' => $name], $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        if (isset(self::$publicProperties82c12[$name])) {
            return $this->valueHolder9b78a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9b78a;

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

        $targetObject = $this->valueHolder9b78a;
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
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9b78a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9b78a;
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
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, '__isset', array('name' => $name), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9b78a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9b78a;
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
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, '__unset', array('name' => $name), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9b78a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9b78a;
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
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, '__clone', array(), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        $this->valueHolder9b78a = clone $this->valueHolder9b78a;
    }

    public function __sleep()
    {
        $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, '__sleep', array(), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;

        return array('valueHolder9b78a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf3e82 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf3e82;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf3e82 && ($this->initializerf3e82->__invoke($valueHolder9b78a, $this, 'initializeProxy', array(), $this->initializerf3e82) || 1) && $this->valueHolder9b78a = $valueHolder9b78a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9b78a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9b78a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
