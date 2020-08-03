<?php comment_form([
                    
                        'comment_field' => '<div class="form-group mb-4">
                                <textarea name="comment" class="form-control" rows="5" id="comment" placeholder="Add Comment"></textarea>
                            </div>',
                        'fields'  =>  [
                            
                            'author' => '<div class="row"><div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
                                    <div class="d-flex align-items-center">
                                        <i class="fa fa-user-circle-o text-muted position-absolute pl-3"></i>
                                        <input type="text" name="author" class="form-control shadow-none" style="padding-left: 40px;" placeholder="Full Name"/>
                                    </div>
                                </div>',
                            'email'  =>  '<div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
                                    <div class="d-flex align-items-center">
                                        <i class="fa fa-envelope-o  text-muted position-absolute pl-3"></i>
                                        <input type="email" name="email" class="form-control shadow-none" style="padding-left: 40px;" placeholder="Email"/>
                                    </div>
                                </div></div>',
                            
                            ],
                        'class_submit'  =>  'btn btn-primary pb-3',
                        'label_submit'  =>  'Post Comment',
                    
                    ]) ?>
