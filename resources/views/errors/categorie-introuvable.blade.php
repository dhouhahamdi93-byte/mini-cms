<x-layout>
    <x-slot:title>Catégorie introuvable - Mini-CMS</x-slot:title>

    <x-page-header title="Catégorie introuvable" subtitle="Cette catégorie n'existe pas ou a été supprimée." />

    <x-alert type="info" title="Que faire ?" class="max-w-2xl">
        Vérifiez l'adresse, ou choisissez l'une des catégories ci-dessous.
    </x-alert>

    <p class="mt-6">
        <a href="{{ route('posts.index') }}" class="font-medium text-indigo-600 hover:underline">Voir tous les articles</a>
    </p>

    @if ($categories->isNotEmpty())
        <h2 class="mt-8 text-xl font-semibold">Catégories</h2>

        <ul class="mt-4 flex flex-wrap gap-3">
            @foreach ($categories as $category)
                <li>
                    <a href="{{ route('posts.category', $category) }}" class="rounded-md border border-indigo-600 px-4 py-2 text-sm font-medium text-indigo-600 hover:bg-indigo-50">{{ $category->name }}</a>
                </li>
            @endforeach
        </ul>
    @endif
</x-layout>