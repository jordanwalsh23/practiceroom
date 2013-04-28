<!-- File: /app/View/Posts/index.ctp -->

<h1>Current Competitions</h1>
<p><?php echo $this->Html->link("Start New Competition", array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Created</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->

<?php foreach ($competitions as $competition): ?>
    <tr>
        <td><?php echo $competition['Competition']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($competition['Competition']['name'], array('action' => 'view', $competition['Competition']['id'])); ?>
        </td>
        <td>
            <?php echo $competition['Competition']['created']; ?>
        </td>
    </tr>
<?php endforeach; ?>

</table>
