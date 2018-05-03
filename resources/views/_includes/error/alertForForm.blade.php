<template>
  
    <section>
        @if ($errors->any())
        <b-notification type="is-info" has-icon>
          @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
        </b-notification>
    </section>
 @endif
    
</template>

  