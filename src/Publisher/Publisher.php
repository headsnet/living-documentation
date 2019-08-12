<?php
declare(strict_types=1);

namespace Headsnet\LivingDocumentation\Publisher;

use AlpEs\BookingManagement\Domain\Model\Booking\Booking;
use HaydenPierce\ClassFinder\ClassFinder;
use Headsnet\LivingDocumentation\Annotation\DDD\AggregateRoot;
use Headsnet\LivingDocumentation\Annotation\DDD\CoreConcept;
use Symfony\Component\Finder\Finder;
use Twig\Environment as Twig;
use Twig\Error\Error;

/**
 * Class
 */
final class Publisher
{
    /**
     * @var Twig
     */
    private $twig;

    /**
     * @var string
     */
    private $projectDir;

    /**
     * @param Twig   $twig
     * @param string $projectDir
     */
    public function __construct(Twig $twig, string $projectDir)
    {
        $this->twig = $twig;
        $this->projectDir = $projectDir;
    }

    /**
     * @param string $namespace
     *
     * @throws Error
     */
    public function publish(string $namespace)
    {
        $reader = new AnnotationReader();

        //$files = $this->findFiles($namespace);
        $classes = ClassFinder::getClassesInNamespace($namespace, ClassFinder::RECURSIVE_MODE);

        $data = ['namespace' => $namespace];

        foreach ($classes as $class)
        {
            $results = $reader->getClass($class);
            if (count($results))
            {
                foreach($results as $result)
                {
                    if (strpos(get_class($result), 'LivingDocumentation'))
                    {
                        if ($result instanceof CoreConcept)
                        {
                            $data['coreConcepts'][$class][] = $result->getDescription();
                        }

                        if ($result instanceof AggregateRoot)
                        {
                            $data['aggregateRoots'][] = $class;
                        }
                    }
                }
            }
        }

        //dump($data);

        echo $this->twig->render('core-concepts.html.twig', ['data' => $data]);
    }

    /**
     * @param string $namespace
     */
    private function findFiles(string $namespace)
    {

        //$classes = ;

        //var_dump($classes);

        /*$finder = new Finder();

        $finder->files()
            ->in($this->projectDir . $path)
            ->name('*.php')
        ;

        foreach ($finder as $file) {
            $absoluteFilePath = $file->getRealPath();
            $fileNameWithExtension = $file->getRelativePathname();

            $contents = $file->getContents();



            //dump($file);
            // ...
        }*/
    }
}
