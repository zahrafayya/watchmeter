<div>
    <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
        {{ csrf_field() }}
        <div class="card-body">
            <div class="form-group">
                <div class="col-sm-10">
                    <label for = "status">Select Class</label>
                    <select class="form-control">
                        <option value=""></option>
                    </select>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary" wire:loading.attr=""disabled>Add Assignment
                </button>
                <div wire:loading>
                    Hold On...
                </div>
            </div>

        </div>
    </form>
</div>
