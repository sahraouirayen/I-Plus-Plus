<?php

namespace Container5CZyfEj;

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder36f33 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera8972 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties15b8f = [
        
    ];

    public function getConnection()
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'getConnection', array(), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'getMetadataFactory', array(), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'getExpressionBuilder', array(), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'beginTransaction', array(), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'getCache', array(), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->getCache();
    }

    public function transactional($func)
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'transactional', array('func' => $func), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'wrapInTransaction', array('func' => $func), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'commit', array(), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->commit();
    }

    public function rollback()
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'rollback', array(), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'getClassMetadata', array('className' => $className), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'createQuery', array('dql' => $dql), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'createNamedQuery', array('name' => $name), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'createQueryBuilder', array(), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'flush', array('entity' => $entity), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'clear', array('entityName' => $entityName), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->clear($entityName);
    }

    public function close()
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'close', array(), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->close();
    }

    public function persist($entity)
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'persist', array('entity' => $entity), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'remove', array('entity' => $entity), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'refresh', array('entity' => $entity), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'detach', array('entity' => $entity), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'merge', array('entity' => $entity), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'getRepository', array('entityName' => $entityName), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'contains', array('entity' => $entity), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'getEventManager', array(), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'getConfiguration', array(), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'isOpen', array(), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'getUnitOfWork', array(), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'getProxyFactory', array(), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'initializeObject', array('obj' => $obj), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'getFilters', array(), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'isFiltersStateClean', array(), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'hasFilters', array(), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return $this->valueHolder36f33->hasFilters();
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

        $instance->initializera8972 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder36f33) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder36f33 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder36f33->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, '__get', ['name' => $name], $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        if (isset(self::$publicProperties15b8f[$name])) {
            return $this->valueHolder36f33->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder36f33;

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

        $targetObject = $this->valueHolder36f33;
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
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder36f33;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder36f33;
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
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, '__isset', array('name' => $name), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder36f33;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder36f33;
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
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, '__unset', array('name' => $name), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder36f33;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder36f33;
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
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, '__clone', array(), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        $this->valueHolder36f33 = clone $this->valueHolder36f33;
    }

    public function __sleep()
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, '__sleep', array(), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return array('valueHolder36f33');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera8972 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera8972;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'initializeProxy', array(), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder36f33;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder36f33;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder36f33 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera8972 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties15b8f = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        if ($this->valueHolder36f33 === $returnValue = $this->valueHolder36f33->paginate($target, $page, $limit, $options)) {
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

        $instance->initializera8972 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder36f33) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder36f33 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, '__get', ['name' => $name], $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        if (isset(self::$publicProperties15b8f[$name])) {
            return $this->valueHolder36f33->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder36f33;

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

        $targetObject = $this->valueHolder36f33;
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
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder36f33;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder36f33;
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
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, '__isset', array('name' => $name), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder36f33;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder36f33;
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
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, '__unset', array('name' => $name), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder36f33;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder36f33;
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
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, '__clone', array(), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        $this->valueHolder36f33 = clone $this->valueHolder36f33;
    }

    public function __sleep()
    {
        $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, '__sleep', array(), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;

        return array('valueHolder36f33');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera8972 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera8972;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera8972 && ($this->initializera8972->__invoke($valueHolder36f33, $this, 'initializeProxy', array(), $this->initializera8972) || 1) && $this->valueHolder36f33 = $valueHolder36f33;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder36f33;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder36f33;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
