<?php
namespace F2\PoC\Service\Index;
use TYPO3\FLOW3\Annotations as FLOW3;
use \F2\PoC\Service\Index\IndexableModel;
/**
 * Created by JetBrains PhpStorm.
 * User: fernando
 * Date: 26/11/11
 * Time: 10:54
 * To change this template use File | Settings | File Templates.
 */
/**
 * @FLOW3\Scope("singleton")
 */
class LuceneIndex implements IndexManagerInterface, IndexSearchInterface {
//    /**
//     * @FLOW3\Inject
//     * @var \TYPO3\FLOW3\Persistence\PersistenceManagerInterface
//     */
//    protected $persistenceManager;
//
//    /**
//     * @FLOW3\Inject
//     * @var \TYPO3\FLOW3\Reflection\ReflectionService
//     */
//    protected $reflectionService;
//
//    /**
//     * @var directorio del indice de lucene
//     */
//    private $luceneDirPath;
//
//    /**
//     * Objeto que gestiona el indice Lucene
//     *
//     * @var object Zend_Search_Lucene
//     */
//    protected $index;

    /**
     * Borra del indice todos los objetos que cumplen con el criterio keyword=valor
     *
     * @param string $keyword
     * @param string $value
     * @return void
     */
    public function deleteByKeyword($keyword, $value) {
//        $hits = $this->index->find($keyword . ':' . $value);
//        foreach ($hits as $hit) {
//            $this->index->delete($hit->id);
//        }
    }

    /**
     * Borra el indice completo
     *
     * @return void
     */
    public function deleteAll() {
        // TODO: Implement deleteAll() method.
    }

    /**
     * Busca un objeto en el indice y devuelve una coleccion de hits que cumplen con el criterio de busqueda
     *
     * @param string $userQuery query string
     * @param string $type object classname
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function find($type, $userQuery) {
//        //default search field
//        $annotationReader = new \Doctrine\Common\Annotations\AnnotationReader();
//        $reflectionClass = new \ReflectionClass($type);
//        if($this->reflectionService->isClassAnnotatedWith($type,'F2\Base\Annotations\Index')){
//            $classIndexAnnotation = $annotationReader->getClassAnnotation($reflectionClass,'F2\Base\Annotations\Index');
//            if($classIndexAnnotation->defaultField){
//                \Zend_Search_Lucene::setDefaultSearchField($classIndexAnnotation->defaultField);
//            }
//        }
//
//        // la busqueda en si
//        $query = 'class:' . str_replace('\\', '\\\\', $type) . "AND $userQuery";
//        $hits = $this->index->find($query);
//        $objectsFound = new \Doctrine\Common\Collections\ArrayCollection();
//        foreach ($hits as $hit) {
//            $objectRetrieved = $this->persistenceManager->getObjectByIdentifier($hit->identifier, $type);
//            if ($objectRetrieved) {
//                $objectsFound->add($objectRetrieved);
//            }
//        }
//        return $objectsFound;
    }

    public function __construct($luceneDirPath) {
//        $this->luceneDirPath = $luceneDirPath;
    }

    public function initializeObject() {
//        \Zend_Search_Lucene_Analysis_Analyzer::setDefault(new \Zend_Search_Lucene_Analysis_Analyzer_Common_Utf8Num_CaseInsensitive());
//        if (!is_readable($this->luceneDirPath)) {
//            throw new \F2\Base\Exception\BaseException('El directorio de indexacion no se puede leer', 1309201437);
//        }
//        try {
//            $this->index = \Zend_Search_Lucene::open($this->luceneDirPath);
//        } catch (\Zend_Search_Lucene_Exception $ex) {
//            $this->index = \Zend_Search_Lucene::create($this->luceneDirPath);
//        }
    }

    /**
     * @param IndexableModel $object
     * @return void
     */
    public function indexObject(IndexableModel $object) {
//        $doc = new \Zend_Search_Lucene_Document();
//
//        // Campos obligatios comunes para todos los objetos
//        $doc->addField(\Zend_Search_Lucene_Field::Keyword('identifier', $object->getIdentifier(), 'utf-8'));
//        $doc->addField(\Zend_Search_Lucene_Field::Keyword('class', get_class($object), 'utf-8'));
//
//        // Campos opcionales en funcion de las anotaciones en propiedades
//        $annotationReader = new \Doctrine\Common\Annotations\AnnotationReader();
//        $reflectionClass = new \ReflectionClass(get_class($object));
//        $properties = $reflectionClass->getProperties();
//        foreach ($properties as $property) {
//            if ($this->reflectionService->isPropertyAnnotatedWith(get_class($object), $property->getName(), 'F2\Base\Annotations\Index')) {
//                $indexAnnotation = $annotationReader->getPropertyAnnotation($property, 'F2\Base\Annotations\Index');
//                $propertyGetter = 'get' . ucfirst($property->getName());
//                $propertyValue = $object->$propertyGetter();
//                $doc->addField($this->getLuceneField($indexAnnotation->type,$property->getName(),$propertyValue,$indexAnnotation->boost,$indexAnnotation->html));
//            }
//        }
//        $this->index->addDocument($doc);
    }

    /**
     * @param IndexableObject $object
     * @return void
     */
    public function deleteObject(IndexableObject $object) {
//        $hits = $this->index->find('identifier:' . $object->getIdentifier() . ' AND class:' . str_replace('\\', '\\\\', get_class($object)));
//        foreach ($hits as $hit) {
//            $this->index->delete($hit->id);
//        }
    }

    /**
     * Finaliza el objeto y hace un commit del indice para evitar tenerlo que hacer en cada update o delete
     *
     * @link http://flow3.typo3.org/documentation/manuals/flow3/flow3.objectframework/#id36283856
     * @return void
     */
    public function shutdownObject() {
//        $this->index->commit();
//        $this->index->optimize();
    }

    /**
     * Actualiza la indexacion de un objeto
     *
     * @param IndexableModel $object
     * @return void
     */
    public function updateObject(IndexableModel $object) {
//        $this->deleteObject($object);
//        $this->indexObject($object);
    }

    /**
     * @param $type
     * @param $boost
     * @param $value
     * @param bool $html
     * @return \Zend_Search_Lucene_Field
     */
    private function getLuceneField($type, $name, $value, $boost, $html) {
//        switch ($type) {
//            case 'text':
//                if ($html) {
//                    $value = strip_tags($value);
//                }
//                $field = \Zend_Search_Lucene_Field::Text($name, $value, 'utf-8');
//                break;
//            case 'keyword':
//                $field = \Zend_Search_Lucene_Field::Keyword($name, $value, 'utf-8');
//                break;
//            case 'unstored':
//                $field = \Zend_Search_Lucene_Field::UnStored($name, $value, 'utf-8');
//                break;
//            case 'date':
//                if (!($value instanceof \Date) && !($value instanceof \DateTime)) {
//                    throw new \F2\Base\Exception\BaseException('Establecido la indexacion de un campo como date pero en realidad no es una fecha', 1322327913);
//                }
//                $field = \Zend_Search_Lucene_Field::UnStored($name, $value->format('Ymd'), 'utf-8');
//                break;
//        }
//        $field->boost = $boost;
//        return $field;

    }
}