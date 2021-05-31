
<div>

    @if (session()->has('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>

    @endif

    @if ($statusUpdate)
    <livewire:category.category-update></livewire:category.category-update>
    @else
    <livewire:category.category-create></livewire:category.category-create>
    @endif



    <hr>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Category Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="tbody">
            @foreach ($categories as $category)
            <tr>
                <th>#{{$category->id}}</th>
                <th>{{$category->name}}</th>
                <th>
                    <button wire:click="getCategory({{ $category->id }})" class="btn btn-sm btn-info text-white">Edit</button>
                    <button wire:click="destroy({{ $category->id }})" class="btn btn-sm btn-danger text-white">Delete</button>
                </th>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
