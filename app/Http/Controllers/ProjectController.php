<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Symfony\Component\Yaml\Yaml;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        // Lire les fichiers Markdown du dossier
        $projects = $this->getProjects();

        return view('pages.projects.index', compact('projects'));
    }

    public function show($slug)
    {
        // Lire le fichier Markdown spécifique
        $project = $this->getProject($slug);

        return view('pages.projects.show', compact('project'));
    }

    private function getProjects()
    {
        $markdownPath = resource_path('views/md_projects');

        // Lire tous les fichiers Markdown du dossier
        $files = File::files($markdownPath);

        $projects = [];

        foreach ($files as $file) {
            $content = File::get($file);

            // Extraire les informations du fichier Markdown
            $yamlHeader = $this->getYamlHeader($content);

            // Ajouter les informations du projet à un tableau
            $projects[] = [
                'title' => $yamlHeader['title'] ?? 'Titre non défini',
                'photo' => $yamlHeader['img'] ?? null,
                'photo_alt' => $yamlHeader['img_alt'] ?? 'Légende image non définie',
                'description' => $yamlHeader['description'] ?? 'Description non définie',
                'tags' => $yamlHeader['tags'] ?? 'Tags non ajoutés',
                'slug' => Str::of($yamlHeader['file_name'] ?? '')->value(),
            ];
        }

        return $projects;
    }

    private function getProject($slug)
    {
        // Lire le fichier Markdown spécifique
        $markdownPath = resource_path('views/md_projects');
        $filePath = "{$markdownPath}/{$slug}.md";

        if (File::exists($filePath)) {
            $content = File::get($filePath);

            // Extraire les informations du fichier Markdown
            $yamlHeader = $this->getYamlHeader($content);
            $content = $this->getContent($content);

            // Extraire les titres et les textes correspondants du contenu Markdown
            $matches = preg_split('/^# (.+)$/m', $content, -1, PREG_SPLIT_DELIM_CAPTURE);

            $sections = [];
            $numMatches = count($matches);
            for ($i = 1; $i < $numMatches; $i += 2) {
                $title = $matches[$i];
                $text = isset($matches[$i + 1]) ? $matches[$i + 1] : '';
                $sections[trim($title)] = trim($text);
            }

            // Retourner les informations du projet avec les sections
            return [
                'title' => $yamlHeader['title'] ?? 'Titre non défini',
                'tags' => $yamlHeader['tags'] ?? 'Tags non définis',
                'sections' => $sections,
            ];
        }

        abort(404); // Projet non trouvé
    }

    private function getYamlHeader($content)
    {
        // Extraire le contenu YAML du début du fichier
        preg_match('/^---(.*?)---/s', $content, $matches);
        $yamlHeader = Yaml::parse($matches[1] ?? '');

        return $yamlHeader ?? [];
    }

    private function getContent($content)
    {
        // Extraire le contenu Markdown après le YAML
        preg_match('/^---(.*?)---(.*)/s', $content, $matches);
        $markdownContent = $matches[2] ?? '';

        return $markdownContent;
    }
}
