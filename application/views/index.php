<div id="content">
    <h1>Blog Posts</h1>
    <p><?php echo anchor('blog/create', 'Add Post'); ?></p>

    <table>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Actions</th>
            <th>Created</th>
        </tr>


    <?php foreach($posts as $post) : ?>

        <tr>
            <td><?php echo $post->id; ?></td>
            <td><?php echo anchor("blog/read/{$post->id}", $post->title); ?></td>
            <td><?php echo anchor('blog/delete/'.$post->id, 'Delete', array('onclick' => "return confirm('Are you sure want to delete this post?')")); ?>&nbsp;<?php echo anchor('blog/update/'.$post->id, 'Update'); ?></td>
            <td><?php echo $post->created; ?></td>
        </tr>
            
    <?php endforeach; ?>

    </table>
</div>