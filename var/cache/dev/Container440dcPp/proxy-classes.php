<?php

namespace Container440dcPp;

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder99040 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0c27b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3de3b = [
        
    ];

    public function getConnection()
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'getConnection', array(), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'getMetadataFactory', array(), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'getExpressionBuilder', array(), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'beginTransaction', array(), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'getCache', array(), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->getCache();
    }

    public function transactional($func)
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'transactional', array('func' => $func), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'wrapInTransaction', array('func' => $func), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'commit', array(), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->commit();
    }

    public function rollback()
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'rollback', array(), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'getClassMetadata', array('className' => $className), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'createQuery', array('dql' => $dql), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'createNamedQuery', array('name' => $name), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'createQueryBuilder', array(), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'flush', array('entity' => $entity), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'clear', array('entityName' => $entityName), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->clear($entityName);
    }

    public function close()
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'close', array(), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->close();
    }

    public function persist($entity)
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'persist', array('entity' => $entity), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'remove', array('entity' => $entity), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'refresh', array('entity' => $entity), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'detach', array('entity' => $entity), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'merge', array('entity' => $entity), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'contains', array('entity' => $entity), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'getEventManager', array(), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'getConfiguration', array(), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'isOpen', array(), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'getUnitOfWork', array(), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'getProxyFactory', array(), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'initializeObject', array('obj' => $obj), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'getFilters', array(), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'isFiltersStateClean', array(), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'hasFilters', array(), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return $this->valueHolder99040->hasFilters();
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

        $instance->initializer0c27b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder99040) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder99040 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder99040->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, '__get', ['name' => $name], $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        if (isset(self::$publicProperties3de3b[$name])) {
            return $this->valueHolder99040->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder99040;

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

        $targetObject = $this->valueHolder99040;
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
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder99040;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder99040;
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
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, '__isset', array('name' => $name), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder99040;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder99040;
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
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, '__unset', array('name' => $name), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder99040;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder99040;
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
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, '__clone', array(), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        $this->valueHolder99040 = clone $this->valueHolder99040;
    }

    public function __sleep()
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, '__sleep', array(), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return array('valueHolder99040');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0c27b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0c27b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'initializeProxy', array(), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder99040;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder99040;
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
    private $valueHolder99040 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0c27b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3de3b = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        if ($this->valueHolder99040 === $returnValue = $this->valueHolder99040->paginate($target, $page, $limit, $options)) {
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

        $instance->initializer0c27b = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder99040) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder99040 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, '__get', ['name' => $name], $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        if (isset(self::$publicProperties3de3b[$name])) {
            return $this->valueHolder99040->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder99040;

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

        $targetObject = $this->valueHolder99040;
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
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder99040;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder99040;
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
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, '__isset', array('name' => $name), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder99040;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder99040;
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
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, '__unset', array('name' => $name), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder99040;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder99040;
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
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, '__clone', array(), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        $this->valueHolder99040 = clone $this->valueHolder99040;
    }

    public function __sleep()
    {
        $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, '__sleep', array(), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;

        return array('valueHolder99040');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0c27b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0c27b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0c27b && ($this->initializer0c27b->__invoke($valueHolder99040, $this, 'initializeProxy', array(), $this->initializer0c27b) || 1) && $this->valueHolder99040 = $valueHolder99040;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder99040;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder99040;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
