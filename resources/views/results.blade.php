<x-layout>
    <x-page-heading>
        Results
    </x-page-heading>

    <section>
        <div class="mt-6 space-y-6">
            @foreach($jobs as $job)
                <x-job-card-wide :$job/>
            @endforeach
        </div>
    </section>
</x-layout>
