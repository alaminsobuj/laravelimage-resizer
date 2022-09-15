# laravelimage-resizer

1.
    <code>
    
        composer require intervention/image

    </code>

2.
<code>

    return [
      ......
      $providers => [
        ......,
        'Intervention\Image\ImageServiceProvider'
      ],
      $aliases => [
        ......,
        'Image' => 'Intervention\Image\Facades\Image'
      ]
    ]
</code>

3. This before controller class

<code>

     use Image; 
     
</code>


4.create directory images
