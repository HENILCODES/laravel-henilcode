@csrf
<div class="form-outline mb-4">
    <label class="form-label" for="email">User Name</label>
    <input type="text" name="name" id="name" class="form-control" @isset($user) value="{{$user->name}}" @endisset />
    @error('name')
        <div class="text-end text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-outline mb-4">
    <label class="form-label" for="email">Email address</label>
    <input type="email" name="email" id="email" class="form-control"  @isset($user) value="{{$user->email}}" @endisset />
    @error('email')
        <div class="text-end text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-outline mb-4">
    <label class="form-label" for="password">Password</label>
    <input type="password" name="password" id="password" class="form-control"  @isset($user) value="{{$user->password}}" @endisset  />
    @error('password')
        <div class="text-end text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="input-group my-5">
    <label class="input-group-text">State</label>
    <select name="state" class="form-select" >
        <option>Gujrat</option>
        <option>Goa</option>
        <option>Bihar</option>
        <option>Assam</option>
    </select>
</div>
@error('state')
    <div class="text-end text-danger">{{ $message }}</div>
@enderror

<div class="input-group">
    <label class="input-group-text">Roll</label>
    <div class="form-check m-2">
        <input class="form-check-input" type="radio" id="admin" name="roll" value="admin" @isset($user) {{$user->roll=='admin'? 'checked':''}} @endisset>
        <label class="form-check-label" for="admin">
            admin
        </label>
    </div>
    <div class="form-check m-2">
        <input class="form-check-input" type="radio" id="user" name="roll" value="user" @isset($user) {{$user->roll=='user'? 'checked':''}} @endisset>
        <label class="form-check-label" for="user">
            user
        </label>
    </div>
</div>
@error('roll')
    <div class="text-end text-danger">{{ $message }}</div>
@enderror
<div class="mt-5">
    <button type="submit" class="btn btn-primary btn-block mb-4 w-100">Submit</button>
</div>
