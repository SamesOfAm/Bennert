<?php
return array(
  'label' => array('Projekt', ''),
  'types' => array('content', 'module'),
  'contentCategory' => 'texts',
  'moduleCategory' => 'miscellaneous',
  'beTemplate' => 'be_wildcard',
  'standardFields' => array(),
  'wrapper' => array(
    'type' => 'none'
  ),
  'fields' => array(
    'title' => array(
      'label' => array('Titel', ''),
      'eval' => array('tl_class' => 'w50'),
      'inputType' => 'text'
    ),
    'subheadline' => array(
      'label' => array('Unterüberschrift', ''),
      'eval' => array('tl_class' => 'w50'),
      'inputType' => 'text'
    ),
    'imageDescription' => array(
      'label' => array('Bild', ''),
      'inputType' => 'group',
    ),
    'image' => array(
      'label' => array('Bild', ''),
      'inputType' => 'fileTree',
      'eval' => array('filesOnly' => true)
    ),
    'teaserDescirption' => array(
      'label' => array('Text', ''),
      'inputType' => 'group',
    ),
    'text' => array(
      'label' => array('Text', 'Lange Beschreibung des Projektes'),
      'eval' => array('rte' => 'tinyMCE'),
      'inputType' => 'textarea'
    ),
    'linkDescirption' => array(
      'label' => array('Link-Information', ''),
      'inputType' => 'group',
    ),
    'link' => array(
      'label' => array('Link', 'Auf welche Seite wird verlinkt?'),
      'inputType' => 'pageTree'
    )
  )
);
