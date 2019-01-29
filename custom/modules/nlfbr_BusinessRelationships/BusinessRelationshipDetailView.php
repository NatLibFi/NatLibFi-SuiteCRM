<?php

require_once 'include/DetailView/DetailView2.php';
class BusinessRelationshipDetailView extends DetailView2
{
    /**
     * Adds fillers to each row if required
     *
     * Panel alignment will be off if the panel doesn't have a row with the max column
     * It will not be aligned to the other panels so we fill out the columns in the last row
     *
     * @param array $panel
     * @return array
     */
    protected function getPanelWithFillers($panel)
    {
        $addFiller = true;
        foreach($panel as $row)
        {
            if (count($row) == $this->defs['templateMeta']['maxColumns']
                || 1 == count($panel))
            {
                $addFiller = false;
                break;
            }
        }
        // NLF custom: do not add filler column(s) if all rows of the panel
        // contain single field only (in such a case, filler column makes
        // the actual field significantly more narrow).
        if ($addFiller) {
            $allRowsSingleField = true;
            foreach ($panel as $row) {
                if (count($row) > 1) {
                    $allRowsSingleField = false;
                    break;
                }
            }
            if ($allRowsSingleField) {
                $addFiller = false;
            }
        }

        if ($addFiller)
        {
            $rowCount = count($panel);
            $filler   = count($panel[$rowCount-1]);
            while ($filler < $this->defs['templateMeta']['maxColumns'])
            {
                $panel[$rowCount - 1][$filler++] = array('field' => array('name' => ''));
            }
        }

        return $panel;
    }

}
