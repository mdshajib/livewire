<div>
    <div class="row mt-3 pt-2">
        <div class="col-md-8">
            <form class="row g-3">
                <div class="col-md-6 mb-1">
                    <label for="full_name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="full_name" wire:model.lazy="full_name" aria-describedby="Full Name">
                </div>

                <div class="col-md-6 mb-1">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" wire:model.lazy="email" aria-describedby="Email">
                </div>

                <div class="col-md-6 mb-1">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone"wire:model.lazy="phone" aria-describedby="Phone">
                </div>

                <div class="col-md-6 mb-1">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" wire:model.lazy="address" aria-describedby="Address">
                </div>

            
                <div class="col-md-6 mb-1">
                    <label for="department" class="form-label">Department</label>
                    <input type="text" class="form-control" id="department" wire:model.lazy="department" aria-describedby="Department">
                </div>
                
                <div class="col-md-6 mb-1">
                    <label for="designation" class="form-label">Designation</label>
                    <input type="text" class="form-control" id="designation" wire:model.lazy="designation" aria-describedby="Designation">
                </div>

                <div class="col-md-6 mb-1">
                    <label for="Joining_date" class="form-label">Joining Date</label>
                    <input type="text" class="form-control" id="Joining_date" wire:model.lazy="joining_date" aria-describedby="Joining Date">
                </div>

                <div class="col-md-6 mb-1">
                    <label for="Joining_date" class="form-label">Profile Photo</label>
                    <input type="file" class="form-control"  wire:model.lazy="photo">
                </div>
                <div class="col-md-12 mb-1">
                    <button type="button" wire:click="Save()" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
