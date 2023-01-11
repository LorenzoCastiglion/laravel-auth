@extends('layouts.admin')

@section('content')
 {{-- <div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div> --}}
        <h1>Edit Post: {{$project->name}}</h1>
        <div class="row bg-white">
            <div class="col-12">
                <form action="{{route('admin.projects.update', $project->slug)}}" method="POST" enctype="multipart/form-data" class="p-4">
                    @csrf
                    @method('PUT')
                      <div class="mb-3">
                        <label for="name" class="form-label">Project Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name', $project->name)}}">
                        @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="descritpion" class="form-label">Descritpion</label>
                        <textarea class="form-control" id="descritpion" name="descritpion">{{old('descritpion', $project->description)}}</textarea>
                      </div>

                      <div class="mb-3">
                        <label for="dev_lang" class="form-label">Used Dev Languages</label>
                        <input type="text" class="form-control @error('dev_lang') is-invalid @enderror" id="dev_lang" name="dev_lang" value="{{old('dev_lang', $project->dev_lang)}}">
                        @error('dev_lang')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="framework" class="form-label">Framework</label>
                        <input type="text" class="form-control @error('framework') is-invalid @enderror" id="framework" name="framework" value="{{old('framework', $project->framework)}}">
                        @error('framework')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="team" class="form-label">Team</label>
                        <input type="text" class="form-control @error('team') is-invalid @enderror" id="team" name="team" value="{{old('team"', $project->team)}}">
                        @error('team')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="git_link" class="form-label">GitHub Link</label>
                        <input type="text" class="form-control @error('git_link') is-invalid @enderror" id="git_link" name="git_link" value="{{old('git_link', $project->git_link)}}">
                        @error('git_link')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="diff_lvl" class="form-label">Difficolta</label>
                        <input type="number" class="form-control @error('diff_lvl') is-invalid @enderror" id="diff_lvl" name="diff_lvl" value="{{old('diff_lvl', $project->diff_lvl)}}">
                        @error('diff_lvl')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      {{-- <div class="d-flex">
                        <div class="media me-4">
                            <img class="shadow" width="150" src="{{asset('storage/' . $project->cover_image)}}" alt="{{$project->name}}">
                        </div>
                        <div class="mb-3">
                            <label for="cover_image" class="form-label">Replace post image</label>
                            <input type="file" name="cover_image" id="cover_image" class="form-control  @error('cover_image') is-invalid @enderror" >
                            @error('cover_image')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div> --}}
                      <button type="submit" class="btn btn-success">Submit</button>
                      <button type="reset" class="btn btn-primary">Reset</button>
                </form>
            </div>
        </div>

@endsection