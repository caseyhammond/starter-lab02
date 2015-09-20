<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application {

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
            // Get all the images from our model
            $pix = $this->images->newest();
            
            // Build an array of formatted cells for them
            foreach ($pix as $picture)
                $cells[] = $this->parser->parse('cell', (array) $picture, true);
            
            // Prime the table class
            $this->load->library('table');
            $params = array(
                'table_open' => '<table class="gallery">',
                'cell_start' => '<td class="oneimage">',
                'cell_alt_start' => '<td class="oneimage">'
            );
            $this->table->set_template($params);
            
            // Finally! Generate the table
            $rows = $this->table->make_columns($cells, 3);
            $this->data['thetable'] = $this->table->generate($rows);

            $this->data['pagebody'] = 'welcome';
            $this->render();
	}
}
