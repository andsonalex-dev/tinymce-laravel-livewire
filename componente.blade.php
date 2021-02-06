   <div wire:ignore>
                                <label for="about" class="block text-sm font-medium text-gray-700">
                                    Sobre:
                                </label>
                                <div class="mt-1">
                                    <textarea id="about" wire:model="about"  wire:key="about" rows="20" class="about "  x-data
                                    x-ref="page_text"
                                    x-init="
                                            tinymce.init({
                                                path_absolute: '/',
                                                selector: 'textarea.about',
                                                plugins: [
                                                     'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                                                      'searchreplace wordcount visualblocks visualchars code fullscreen ',
                                                      'insertdatetime media nonbreaking save table directionality',
                                                      'emoticons template paste textpattern  imagetools help  '
                                                       ],
                                                        toolbar: 'insertfile undo redo | styleselect | bold italic forecolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | help ',
                                                        relative_urls: false,
                                                        remove_script_host : false,
                                                        document_base_url: '{{config('app.url')}}/',
                                                        language: 'pt_BR',
                                                        setup: function (editor) {
                                                                editor.on('init change', function () {
                                                                          editor.save();
                                                                  });
                                                       editor.on('change', function (e) {
                                                                @this.set('about', editor.getContent());
                                                         });
                                                          },
                                                          });
                                                         "></textarea>
                                </div>
                            </div>
                            <div class="error-message">
                                @error('about')
                                    {{ $message }}
                                @enderror
                            </div>
