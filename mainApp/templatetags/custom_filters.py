from django import template

register = template.Library()

@register.filter
def modulo(value, arg):
    """Return value % arg"""
    try:
        return value % arg
    except (ValueError, TypeError):
        return 0

@register.filter
def divide(value, arg):
    """Return value // arg (integer division)"""
    try:
        return value // arg
    except (ValueError, TypeError, ZeroDivisionError):
        return 0
