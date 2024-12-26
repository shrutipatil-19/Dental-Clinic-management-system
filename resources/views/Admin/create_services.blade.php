@extends('admin.layouts.app')
@section('content')
<section class="is-title-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
        <ul>
            <li>Admin</li>
            <li>Forms</li>
        </ul>
        <a href="https://justboil.me/" onclick="alert('Coming soon'); return false" target="_blank" class="button blue">
            <span class="icon"><i class="mdi mdi-credit-card-outline"></i></span>
            <span>Back</span>
        </a>
    </div>
</section>
<form action="{{ route('services_store') }}" method="post" class="w-[70%] mx-auto" style="width:70%;">
    @csrf
    <div class="container">
        <!-- Existing Fields -->
        <!-- title and description -->
        <div class="field">
            <label class="label">From</label>
            <div class="field-body">
                <div class="field">
                    <div class="control icons-left">
                        <input class="input" type="text" name="title" placeholder="Title">
                        <span class="icon left"><i class="mdi mdi-account"></i></span>
                    </div>
                </div>
                <div class="field">
                    <div class="control icons-left icons-right">
                        <textarea class="input" id="w3review" name="description" rows="4" cols="50"
                            placeholder="Description"></textarea>
                        <!-- <input class="input" type="email" name="email" placeholder="Email"> -->
                        <span class="icon left"><i class="mdi mdi-mail"></i></span>
                    </div>
                </div>
            </div>
        </div>


        <!-- process Dynamic List Fields -->
        <hr>
        <div class="field">
            <label class="label">Add Process</label>
            <div id="process-list">
                <!-- Dynamic Items Will Be Added Here -->
            </div>
            <button type="button" class="button blue" onclick="addServiceField()">Add Service</button>
        </div>

        <!-- duration Dynamic List Fields -->
        <hr>
        <div class="field">
            <label class="label">Add Duration</label>
            <div id="duration-list">
                <!-- Dynamic Items Will Be Added Here -->
            </div>
            <button type="button" class="button blue" onclick="addDurationServiceField()">Add Duration</button>
        </div>

        <!-- pros Dynamic List Fields -->
        <hr>
        <div class="field">
            <label class="label">Add Pros</label>
            <div id="pros-list">
                <!-- Dynamic Items Will Be Added Here -->
            </div>
            <button type="button" class="button blue" onclick="addProsServiceField()">Add Pros</button>
        </div>
        <!-- cons Dynamic List Fields -->
        <hr>
        <div class="field">
            <label class="label">Add Cons</label>
            <div id="cons-list">
                <!-- Dynamic Items Will Be Added Here -->
            </div>
            <button type="button" class="button blue" onclick="addConsServiceField()">Add Cons</button>
        </div>
        <hr>

        <!-- Submit and Reset Buttons -->
        <div class="field grouped">
            <div class="control">
                <button type="submit" class="button green">Submit</button>
            </div>
            <div class="control">
                <button type="reset" class="button red">Reset</button>
            </div>
        </div>
    </div>
</form>

<script>
    let serviceCount = 0;

    function addServiceField() {
        serviceCount++;

        const listDiv = document.getElementById('process-list');
        const serviceDiv = document.createElement('div');
        serviceDiv.classList.add('field-body');
        serviceDiv.style.marginBottom = '1rem';

        serviceDiv.innerHTML = `
            <div class="field">
                <div class="control">
                    <input class="input" type="text" name="process[${serviceCount}][title]" placeholder="Process Title" required>
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <textarea class="textarea" name="process[${serviceCount}][description]" placeholder="Process Description" required></textarea>
                </div>
            </div>
            <button type="button" class="button red" onclick="removeServiceField(this)">Remove</button>
        `;

        listDiv.appendChild(serviceDiv);
    }

    function removeServiceField(button) {
        button.parentElement.remove();
    }
    let durationCount = 0;
    function addDurationServiceField() {
        durationCount++;

        const listDiv = document.getElementById('duration-list');
        const serviceDiv = document.createElement('div');
        serviceDiv.classList.add('field-body');
        serviceDiv.style.marginBottom = '1rem';

        serviceDiv.innerHTML = `
            <div class="field">
                <div class="control">
                    <input class="input" type="text" name="duration[${serviceCount}][title]" placeholder="duration Title" required>
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <textarea class="textarea" name="duration[${serviceCount}][description]" placeholder="duration Description" required></textarea>
                </div>
            </div>
            <button type="button" class="button red" onclick="removeServiceField(this)">Remove</button>
        `;

        listDiv.appendChild(serviceDiv);
    }

    function removeServiceField(button) {
        button.parentElement.remove();
    }
    let prosCount = 0;
    function addProsServiceField() {
        prosCount++;

        const listDiv = document.getElementById('pros-list');
        const serviceDiv = document.createElement('div');
        serviceDiv.classList.add('field-body');
        serviceDiv.style.marginBottom = '1rem';

        serviceDiv.innerHTML = `
            <div class="field">
                <div class="control">
                    <input class="input" type="text" name="pros[${serviceCount}][title]" placeholder="Pros Title" required>
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <textarea class="textarea" name="pros[${serviceCount}][description]" placeholder="Pros Description" required></textarea>
                </div>
            </div>
            <button type="button" class="button red" onclick="removeServiceField(this)">Remove</button>
        `;

        listDiv.appendChild(serviceDiv);
    }

    function removeServiceField(button) {
        button.parentElement.remove();
    }
    let consCount = 0;
    function addConsServiceField() {
        consCount++;

        const listDiv = document.getElementById('cons-list');
        const serviceDiv = document.createElement('div');
        serviceDiv.classList.add('field-body');
        serviceDiv.style.marginBottom = '1rem';

        serviceDiv.innerHTML = `
            <div class="field">
                <div class="control">
                    <input class="input" type="text" name="cons[${serviceCount}][title]" placeholder="Cons Title" required>
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <textarea class="textarea" name="cons[${serviceCount}][description]" placeholder="Cons Description" required></textarea>
                </div>
            </div>
            <button type="button" class="button red" onclick="removeServiceField(this)">Remove</button>
        `;

        listDiv.appendChild(serviceDiv);
    }

    function removeServiceField(button) {
        button.parentElement.remove();
    }
</script>


@endsection