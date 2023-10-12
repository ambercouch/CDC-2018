jQuery(document).ready(function ($) {
    console.log("Each widget")
    // Iterate through each widget
    $('.widget').each(function () {
        // Find the widget_name input field within this widget
        var widgetNameInput = $(this).find('input[name$="[widget_name]"]');

        // Find the .in-widget-title span within this widget
        var inWidgetTitleSpan = $(this).find('.widget-title .in-widget-title');

        // Get the value of the widget_name input field
        var widgetNameValue = widgetNameInput.val();

        // If widget_name has a value, update the .in-widget-title span
        if (widgetNameValue) {
            inWidgetTitleSpan.text(': ' + widgetNameValue);
        }
    });
});

