<div class="card-body">
    <div class="flex flex-between">
        <div>
            <a href="{{ route('jobs.create') }}" class="btn btn-outline-primary" type="button">
                <i class="fas fa-plus"></i>
            </a>
            <button wire:click="load()" class="btn btn-outline-success-1" type="button" id="reload_table">
                <i class="fas fa-undo"></i>
            </button>
            @can('role-delete')
                <button class="btn btn-outline-danger" type="button" data-toggle="modal" data-target="#modal_confirm"
                    data-tippy-content="{{ __('messages.delete_select') }}">
                    <i class="fas fa-trash-alt"></i>
                </button>
            @endcan
            <a href="" class="btn btn-outline-success" type="button" id="excel"
                data-tippy-content="{{ __('messages.export_excel') }}">
                <i class="fas fa-table"></i>
            </a>
            @can('role-delete')
                <button class="btn btn-outline-warning" type="button" data-toggle="modal"
                    data-target="#modal_reset_confirm" data-tippy-content="{{ __('messages.reset_table') }}">
                    <i class="fas fa-ban"></i>
                </button>
            @endcan
            <button class="btn btn-outline-info" type="button" data-tippy-content="cancel filter"
                wire:click='cancelFilter'>
                <i class="fas fa-times"></i>
            </button>
            <div wire:loading>
                Loading...
            </div>
        </div>
        <div class="d-flex">
            <span wire:ignore>
                <select class="form-control me-2 select2-ajax-tags" name="user" wire:model="selectedUser"
                    id="user_search" data-url="{{ route('users.search') }}" wire:click="$emit('postAdded')">
                    <option value="">-- Users --</option>
                </select>
            </span>
            <select class="form-control me-2 ms-2" wire:model="selectedWorkType">
                <option value="" selected>Hình thức làm việc</option>
                @foreach ($works as $value)
                    <option value="{{ $value->value }}">{{ $value->description }}</option>
                @endforeach
            </select>
            <select class="form-control me-2 ms-2" wire:model="selectedPayType">
                <option value="" selected>Hình thức trả tiền</option>
                @foreach ($pays as $value)
                    <option value="{{ $value->value }}">{{ $value->description }}</option>
                @endforeach
            </select>
            <select class="form-control me-2 ms-2" wire:model="selectedField">
                <option value="">Lĩnh vực</option>
                @foreach (App\Models\Field::all() as $value)
                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                @endforeach
            </select>

            <form class="p-r" wire:submit.prevent="submitForm" autocomplete="off" id="search">
                <input class="form-control-search" wire:model.300ms="name" type="text" placeholder="search by name"
                    name="name">
                <button type="submit" class="btn btn-primary-1 btn-search-ad">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    </div>

    <x-alert />

    <div class="table-responsive">
        <table class="mt-3 mb-3 table table-hover table-border">
            <thead>
                <tr>
                    <th>
                        *
                    </th>
                    <x-th value="Title" data="title" :sortBy="$sortBy" :sortAscending="$sortAscending" />
                    <x-th value="Work" data="work_type" :sortBy="$sortBy" :sortAscending="$sortAscending" />
                    <x-th value="User" data="users.name" :sortBy="$sortBy" :sortAscending="$sortAscending" />
                    <x-th value="Jobs" data="fields.name" :sortBy="$sortBy" :sortAscending="$sortAscending" />
                    <x-th value="View" data="view" :sortBy="$sortBy" :sortAscending="$sortAscending" />
                    <x-th value="Created_at" data="created_at" :sortBy="$sortBy" :sortAscending="$sortAscending" />
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @if (count($data) == 0)
                    <tr>
                        <td colspan="8" class="text-center bg-info">
                            No results found ...
                        </td>
                    </tr>
                @else
                    @foreach ($data as $value)
                        <tr wire:key="item-{{ $value->id }}">
                            <td>
                                <input wire:model="selectedIds" class="item-id" type="checkbox"
                                    data-id="{{ $value->id }}" value="{{ $value->id }}" />
                            </td>
                            <td>{{ $value->title }}</td>
                            <td>
                                <span
                                    class="
                                @if ($value->work_type == \App\Enums\WorkType::PARTTIME) {{ 'text-success' }}
                                @else
                                    {{ 'text-warning' }} @endif
                                ">{{ \App\Enums\WorkType::getDescription($value->work_type) }}</span>
                            </td>
                            <td>{{ $value->user->name }}</td>
                            <td>{{ $value->field->name }}</td>
                            <td>{{ $value->view }}</td>
                            <td>{{ date_format($value->created_at, 'H:i:s d/m/Y') }}</td>
                            <td>
                                <div class="text-center">
                                    @can('role-create')
                                        <a class="btn btn-success" href="{{ route('jobs.show', $value->id) }}"
                                            data-tippy-content="{{ __('messages.detail') }}">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    @endcan
                                    @can('role-edit')
                                        <a class="btn btn-warning" href="{{ route('jobs.edit', $value->id) }}"
                                            data-tippy-content="{{ __('messages.edit') }}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    @endcan
                                    @can('role-delete')
                                        <form action="{{ route('jobs.destroy', $value->id) }}"
                                            data-tippy-content="{{ __('messages.delete') }}" class="d-inline delete"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        <div class="pagelist">{!! $data->links() !!}</div>

        <x-modal_confirm />
        {{-- <x-modal_reset_confirm url="{{ route('resetjobs') }}" /> --}}

    </div>

</div>
