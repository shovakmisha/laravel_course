{{-- Це як в реакті. Передаються пропси. required мусить передатись, інакше буде помилка. То, що я задав false - це значення по замовчуванню. --}}
{{-- Це важливо - це не атрибути. Атрибути лежать у змінній $attributes. Як я зрозумів сюди можна запихувати все, що не лежить в категорії атрибутів --}}
@props(['required' => false])


<label {{ $attributes->class($required ? 'required' : '') }}> {{-- Це теж як в реакті - поставити клас(required) в залежності від того чи передалось йому це в пропсах --}}
    {{ $slot }}
</label>
