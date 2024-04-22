<x-form method="GET">
    <div class="row">
        <div class="col-12">
            <div class="mb-3">
                <x-input name="search" placeholder="{{ __('Поиск') }}" class="form-control"  value="{{ request()->input('search') }}"/>
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <x-select name="category_id" class="form-control" :options="$categories" />

            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <x-button type="submit">{{ __('Применить') }}</x-button>
            </div>
        </div>
    </div>
</x-form>
