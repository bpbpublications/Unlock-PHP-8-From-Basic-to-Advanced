<?php

enum OrderStatus: string {
    case PENDING = 'PENDING';
    case PROCESSING = 'IN_PROCESS';
    case COMPLETED = 'COMPLETED';
    case CANCELLED = 'CANCELED';
}

function updateOrderStatus(int $orderId, OrderStatus $status): void {
    // Update order status in database
    //Since we are using Enum, we don't need to worry 
    //about whether the status is invalid or not
}

// Use
updateOrderStatus(123, OrderStatus::PENDING);


enum DaysOfWeek: string {
    case MONDAY = 'Monday';
    case TUESDAY = 'Tuesday';
    // ... and so on for the other days of the week
}

$today = DaysOfWeek::MONDAY;
