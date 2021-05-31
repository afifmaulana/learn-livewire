
<div>

    @if (session()->has('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>

    @endif

    @if ($statusUpdate)
    <livewire:industry.industry-update></livewire:industry.industry-update>
    @else
    <livewire:industry.industry-create></livewire:industry.industry-create>
    @endif



    <hr>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Industry Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="tbody">
            @foreach ($industries as $industry)
            <tr>
                <th>#{{$industry->id}}</th>
                <th>{{$industry->name}}</th>
                <th>
                    <button wire:click="getIndustry({{ $industry->id }})" class="btn btn-sm btn-info text-white">Edit</button>
                    <button wire:click="destroy({{ $industry->id }})" class="btn btn-sm btn-danger text-white">Delete</button>
                </th>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
