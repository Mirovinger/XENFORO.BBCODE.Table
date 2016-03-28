<?php namespace CSI\BbCodeTable\BbCode\Formatter;

/**
 * Class Base
 * @package CSI\BbCodeTable\BbCode\Formatter
 */
class Base
{
  /**
   * @param array $tag
   * @param array $rendererStates
   * @param \XenForo_BbCode_Formatter_Base $formatter
   * @return mixed
   */
  public static function getBbCodeTable(array $tag, array $rendererStates, \XenForo_BbCode_Formatter_Base $formatter)
  {
    $xenOptions = \XenForo_Application::get('options');
    $xenVisitor = \XenForo_Visitor::getInstance();
    $tagOption = array_map('trim', explode('|', $tag['option']));

    if (count($tagOption) > 1) {
      $optDefault = $tagOption[0];
    } else {
      $optDefault = $tag['option'];
    }

    $tagContent = $formatter->renderSubTree($tag['children'], $rendererStates);
    $view = $formatter->getView();

    if ($view) {
      $template = $view->createTemplateObject('csiXF_bbCode_49D3C657_tag_table',
        array(
          'content' => $tagContent,
          'option' => $optDefault,
        ));

      $tagContent = $template->render();
      return trim($tagContent);
    }

    return $tagContent;
  }

  /**
   * @param array $tag
   * @param array $rendererStates
   * @param \XenForo_BbCode_Formatter_Base $formatter
   * @return mixed
   */
  public static function getBbCodeTable_tr(array $tag, array $rendererStates, \XenForo_BbCode_Formatter_Base $formatter)
  {
    $xenOptions = \XenForo_Application::get('options');
    $xenVisitor = \XenForo_Visitor::getInstance();
    $tagOption = array_map('trim', explode('|', $tag['option']));

    if (count($tagOption) > 1) {
      $optDefault = $tagOption[0];
    } else {
      $optDefault = $tag['option'];
    }

    $tagContent = $formatter->renderSubTree($tag['children'], $rendererStates);
    $view = $formatter->getView();

    if ($view) {
      $template = $view->createTemplateObject('csiXF_bbCode_49D3C657_tag_tr',
        array(
          'content' => $tagContent,
          'option' => $optDefault,
        ));

      $tagContent = $template->render();
      return trim($tagContent);
    }

    return $tagContent;
  }

  /**
   * @param array $tag
   * @param array $rendererStates
   * @param \XenForo_BbCode_Formatter_Base $formatter
   * @return mixed
   */
  public static function getBbCodeTable_th(array $tag, array $rendererStates, \XenForo_BbCode_Formatter_Base $formatter)
  {
    $xenOptions = \XenForo_Application::get('options');
    $xenVisitor = \XenForo_Visitor::getInstance();
    $tagOption = array_map('trim', explode('|', $tag['option']));

    if (count($tagOption) > 1) {
      $optDefault = $tagOption[0];
    } else {
      $optDefault = $tag['option'];
    }

    $tagContent = $formatter->renderSubTree($tag['children'], $rendererStates);
    $view = $formatter->getView();

    if ($view) {
      $template = $view->createTemplateObject('csiXF_bbCode_49D3C657_tag_th',
        array(
          'content' => $tagContent,
          'option' => $optDefault,
        ));

      $tagContent = $template->render();
      return trim($tagContent);
    }

    return $tagContent;
  }

  /**
   * @param array $tag
   * @param array $rendererStates
   * @param \XenForo_BbCode_Formatter_Base $formatter
   * @return mixed
   */
  public static function getBbCodeTable_td(array $tag, array $rendererStates, \XenForo_BbCode_Formatter_Base $formatter)
  {
    $xenOptions = \XenForo_Application::get('options');
    $xenVisitor = \XenForo_Visitor::getInstance();
    $tagOption = array_map('trim', explode('|', $tag['option']));

    if (count($tagOption) > 1) {
      $optDefault = $tagOption[0];
    } else {
      $optDefault = $tag['option'];
    }

    $tagContent = $formatter->renderSubTree($tag['children'], $rendererStates);
    $view = $formatter->getView();

    if ($view) {
      $template = $view->createTemplateObject('csiXF_bbCode_49D3C657_tag_td',
        array(
          'content' => $tagContent,
          'option' => $optDefault,
        ));

      $tagContent = $template->render();
      return trim($tagContent);
    }

    return $tagContent;
  }
}
