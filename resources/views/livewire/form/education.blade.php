<div>
    <table class="table table-strped">
        <tr>
            <th>Qualification</th>
            <th>Year</th>
            <th>Percent</th>
        </tr>
    @foreach ($education as $row)
        <tr>
            <td>{{$row->qualification}}</td>
            <td>{{$row->year}}</td>
            <td>{{$row->percent}}</td>
        </tr>
    @endforeach
</table>
    <form wire:submit.prevent = "submit">
    <div class="row">
    <div class="col-md-4">
        <div class="mb-3">
        <label class="form-label">Qualification</label>
        <input class="form-control" type="text" wire:model="qualification" required
        value="">
        @error('qualification')
            <div class="text-danger">
                {{ $message}}
            </div>
        @enderror
    </div>
        </div>

        <div class="col-md-4">

        <div class="mb-3">
        <label class="form-label">year</label>
        <input class="form-control" type="text" wire:model="year"
        value="">
        @error('year')
            <div class="text-danger">
                {{ $message}}
            </div>
        @enderror
    </div>
        </div>

        <div class="col-md-4">

        <div class="mb-3">
        <label class="form-label">Percent/Marks</label>
        <input class="form-control" type="text" wire:model="percent"
        value="">
        @error('percent')
            <div class="text-danger">
                {{ $message}}
            </div>
        @enderror
    </div>
        </div>
    </div>

    <button type="submit" class="btn btn-sm btn-success mb-3">Add</button>
    </form>
</div>
